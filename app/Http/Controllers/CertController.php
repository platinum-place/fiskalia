<?php

namespace App\Http\Controllers;

use App\Http\Requests\Cert\StoreCertRequest;
use App\Http\Resources\CertResource;
use App\Models\Cert;
use Illuminate\Http\Request;

class CertController extends Controller
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
     */
    public function store(StoreCertRequest $request)
    {
        $data = $request->validated();

        $filename = date('YmdHmi') . '-' . $request->file('cert')->getClientOriginalName();
        $data['cert_path'] = $request->file('cert')->storeAs('certs', $filename);

        $record = Cert::create($data);

        return new CertResource($record);
    }

    /**
     * Display the specified resource.
     */
    public function show(Cert $cert)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cert $cert)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cert $cert)
    {
        //
    }
}
