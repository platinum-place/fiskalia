<?php

namespace App\Services;

use App\Models\Cert;
use DGII\Signer\DGIISigner;

class SignerService
{
    public function signXML(string $xml)
    {
        $cert = Cert::whereDate('due_date', '>=', now())->first();

        $certStore = \Storage::get($cert->cert_path);
        $password = $cert->password;

        return DGIISigner::sing($certStore, $password, $xml);
    }
}
