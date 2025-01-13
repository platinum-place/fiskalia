<?php

namespace App\Http\Controllers;

use App\Actions\Cert\SignXML;
use App\Actions\Sequence\GenerateNextSequenceNumber;
use App\Actions\Sequence\GenerateXML;
use App\Enums\DgiiRequest\StatusEnum;
use App\Http\Requests\DgiiRequest\StoreDgiiRequest;
use App\Http\Resources\DgiiRequestResource;
use App\Models\Cert;
use App\Models\DgiiRequest;
use App\Services\DgiiRequestService;
use App\Services\SequenceService;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;

class DgiiRequestController extends Controller
{
    public function __construct(protected DgiiRequestService $service, protected SequenceService $sequenceService) {}

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

        $sequence = $this->sequenceService->getNextSequence($type);
        $sequenceNumber = GenerateNextSequenceNumber::run($sequence);

        $cert = Cert::latest()->get()->first();

        if (empty($cert)) {
            throw new Exception(__(':name not Found', ['name' => __('Cert')]));
        }

        $xml = GenerateXML::run($type);
        //$signedXml = SignXML::run($cert, $xml);

        // $xmlClass = simplexml_load_string($signedXml);
        // $securityCode = substr((string) $xmlClass?->Signature?->SignatureValue, 0, 6);
        // $signatureDate = Carbon::parse((string) $xmlClass?->FechaHoraFirma);

        $record = DgiiRequest::create([
            'status' => StatusEnum::inProcess,
            'sequence_number' => $sequenceNumber,
            // 'security_code' => $securityCode,
            // 'signature_date' => $signatureDate,
            // 'signed_xml' => $signedXml,
            'security_code' => ' ',
            'signature_date' => ' ',
            'signed_xml' => ' ',
            'request' => $data,
            'cert_id' => $cert->id,
            'sequence_id' => $sequence->id,
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
