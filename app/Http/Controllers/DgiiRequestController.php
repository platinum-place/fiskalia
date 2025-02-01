<?php

namespace App\Http\Controllers;

use App\Actions\DgiiRequest\GenerateXML;
use App\Actions\DgiiRequest\SignFCXML;
use App\Actions\SignXML;
use App\Enums\DgiiRequest\StatusEnum;
use App\Enums\DgiiRequest\TypeEnum;
use App\Http\Requests\DgiiRequest\StoreDgiiRequest;
use App\Http\Requests\DgiiRequest\StoreEcfRequest;
use App\Http\Resources\DgiiRequest\EcfResource;
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
        $records = DgiiRequest::paginate();

        return DgiiRequestResource::collection($records);
    }

    public function store(StoreDgiiRequest $request)
    {
        $data = $request->validated();

        $record = DgiiRequest::create($data);

        return new DgiiRequestResource($record);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @throws \Exception
     */
    public function storeEcf(StoreEcfRequest $request)
    {
        $data = $request->validated();

        $xml = view('dgii-request.ecf', $data)->render();
        $signedXml = SignXML::run($xml);

        $record = DgiiRequest::create([
            'status' => StatusEnum::inProcess,
            'signed_xml' => $signedXml,
            'request' => $data,
            'user_id' => $request->user()->id,
        ]);

        return new EcfResource($record);
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
