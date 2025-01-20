<?php

namespace App\Http\Controllers;

use App\Actions\DgiiRequest\GenerateXML;
use App\Actions\DgiiRequest\SignFCXML;
use App\Actions\DgiiRequest\SignXML;
use App\Enums\DgiiRequest\StatusEnum;
use App\Enums\DgiiRequest\TypeEnum;
use App\Http\Requests\DgiiRequest\StoreDgiiRequest;
use App\Http\Resources\DgiiRequestResource;
use App\Models\DgiiRequest;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DgiiRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @throws \Exception
     */
    public function store(StoreDgiiRequest $request)
    {
        $data = $request->validated();

        $sequenceNumber = $data['IdDoc']['eNCF'];
        $total = $data['Totales']['MontoTotal'] ?? 20;
        $typeValue = (int) substr($sequenceNumber, 1, 2);
        $type = TypeEnum::getFromValue($typeValue);

        $xml = GenerateXML::run($type, $data);
        $signedXml = SignXML::run($xml);

        $xmlClass = simplexml_load_string($signedXml);
        $securityCode = substr((string) $xmlClass?->Signature?->SignatureValue, 0, 6);
        $signatureDate = Carbon::parse((string) $xmlClass?->FechaHoraFirma);

        if ($type == TypeEnum::consumeInvoice and $total <= config('dgii.fc_limit')) {
            $signedXml = SignFCXML::run($data, $securityCode);
        }

        $record = DgiiRequest::create([
            'status' => StatusEnum::inProcess,
            'type' => $type,
            'sequence_number' => $sequenceNumber,
            'security_code' => $securityCode,
            'signature_date' => $signatureDate,
            'signed_xml' => $signedXml,
            'request' => $data,
            'user_id' => $request->user()->id,
        ]);

        return new DgiiRequestResource($record);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
