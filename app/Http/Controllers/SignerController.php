<?php

namespace App\Http\Controllers;

use App\Http\Requests\Signer\SignerRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use SignManager;

class SignerController extends Controller
{
    public function __invoke(SignerRequest $request)
    {
        $certStore = Storage::disk('local')->get(env('CERT_PATH'));
        $password = env('CERT_PASSWORD');
        $signedXml = SignManager::sign($certStore, $password, $request->file('xml')->getContent());

        $fileName = date('YmdHis') . '-' . $request->file('xml')->getClientOriginalName();

        return response()->streamDownload(function () use ($signedXml) {
            echo $signedXml;
        }, "$fileName.xml", ['Content-Type' => 'application/xml']);
    }
}
