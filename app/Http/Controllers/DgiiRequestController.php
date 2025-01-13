<?php

namespace App\Http\Controllers;

use App\Actions\Cert\GetActiveCert;
use App\Actions\Cert\SignXML;
use App\Actions\DgiiRequest\GenerateXML;
use App\Enums\DgiiRequest\StatusEnum;
use App\Http\Requests\DgiiRequest\StoreDgiiRequest;
use App\Http\Resources\DgiiRequestResource;
use App\Models\DgiiRequest;
use App\Services\DgiiRequestService;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DgiiRequestController extends Controller
{
    public function __construct(protected DgiiRequestService $service) {}

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDgiiRequest $request)
    {
        $data = $request->validated();

        $type = $data['IdDoc']['TipoeCF'];
        $sequenceNumber = $data['IdDoc']['eNCF'];

        $cert = GetActiveCert::run();
        $xml = GenerateXML::run($type);
        // $signedXml = SignXML::run($cert, $xml);

        // $xmlClass = simplexml_load_string($signedXml);
        // $securityCode = substr((string) $xmlClass?->Signature?->SignatureValue, 0, 6);
        // $signatureDate = Carbon::parse((string) $xmlClass?->FechaHoraFirma);
        // $type = TypeEnum::getFromValue($typeValue);

        $record = DgiiRequest::create([
            'status' => StatusEnum::inProcess,
            'type' => $type,
            'sequence_number' => $sequenceNumber,
            // 'security_code' => $securityCode,
            // 'signature_date' => $signatureDate,
            // 'signed_xml' => $signedXml,
            'security_code' => ' ',
            'signature_date' => ' ',
            'signed_xml' => ' ',
            'request' => $data,
            'cert_id' => $cert->id,
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
