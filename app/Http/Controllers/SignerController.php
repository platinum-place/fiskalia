<?php

namespace App\Http\Controllers;

use App\Services\SignerService;
use Illuminate\Http\Request;

class SignerController extends Controller
{
    public function __construct(protected SignerService $service) {}

    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $request->validate([
            'xml' => ['required', 'file', 'mimes:xml'],
        ]);

        $xml = $request->file('xml')->getContent();

        $signedXml = $this->service->signXML($xml);

        return response()->streamDownload(function () use ($signedXml) {
            echo $signedXml;
        }, ['Content-Type' => 'text/xml']);
    }
}
