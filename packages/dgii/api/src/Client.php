<?php

namespace DGII\API;

use Illuminate\Http\Client\ConnectionException;
use Illuminate\Http\Client\RequestException;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;

class Client
{
    /**
     * @throws RequestException
     * @throws ConnectionException
     */
    public function getAuthSeedXML(Env|string $env): string
    {
        if (is_string($env)) {
            $env = Env::fromName($env);
        }

        $url = config('dgii.domains.ecf').'/'.$env->name.'/autenticacion/api/autenticacion/semilla';

        return Http::get($url)
            ->throw()
            ->body();
    }

    /**
     * @throws RequestException
     * @throws ConnectionException
     */
    public function sendAuthSeed(Env|string $env, string $xmlPath): array
    {
        if (is_string($env)) {
            $env = Env::fromName($env);
        }

        $url = config('dgii.domains.ecf').'/'.$env->name.'/autenticacion/api/autenticacion/validarsemilla';

        $contents = fopen(Storage::path($xmlPath), 'rb');

        return Http::attach('xml', $contents)
            ->post($url)
            ->throw()
            ->json();
    }

    /**
     * @throws RequestException
     * @throws ConnectionException
     */
    public function send(Env|string $env, string $token, string $xmlPath): array
    {
        if (is_string($env)) {
            $env = Env::fromName($env);
        }

        $url = config('dgii.domains.ecf').'/'.$env->name.'/recepcion/api/facturaselectronicas';

        $contents = fopen(Storage::path($xmlPath), 'rb');

        return Http::withToken($token)
            ->attach('xml', $contents)
            ->post($url)
            ->throw()
            ->json();
    }

    /**
     * @throws RequestException
     * @throws ConnectionException
     */
    public function searchByTrackid(Env|string $env, string $token, string $trackId): array
    {
        if (is_string($env)) {
            $env = Env::fromName($env);
        }

        $url = config('dgii.domains.ecf').'/'.$env->name.'/consultaresultado/api/consultas/estado';

        return Http::withToken($token)
            ->get($url, ['trackid' => $trackId])
            ->throw()
            ->json();
    }

    /**
     * @throws RequestException
     * @throws ConnectionException
     */
    public function searchTrackIdList(Env|string $env, string $token, string $senderIdentification, string $sequenceNumber): array
    {
        if (is_string($env)) {
            $env = Env::fromName($env);
        }

        $url = config('dgii.domains.ecf').'/'.$env->name.'/consultatrackids/api/trackids/consulta';

        return Http::withToken($token)
            ->get($url, [
                'RncEmisor' => $senderIdentification,
                'Encf' => $sequenceNumber,
            ])
            ->throw()
            ->json();
    }

    public function getQRLink(Env|string $env, string $senderIdentification, string $sequenceNumber, string $total, string $securityCode, string $date, string $signatureDate, ?string $buyerIdentification = null): string
    {
        if (is_string($env)) {
            $env = Env::fromName($env);
        }

        $parameters = [
            'RncEmisor' => $senderIdentification,
            'ENCF' => $sequenceNumber,
            'MontoTotal' => $total,
            'CodigoSeguridad' => $securityCode,
            'FechaEmision' => date('d-m-Y', strtotime($date)),
            'FechaFirma' => date('d-m-Y H:i:s', strtotime($signatureDate)),
        ];

        $base_url = sprintf('%s/%s', config('dgii.domains.ecf'), $env->name);

        if ($buyerIdentification) {
            $parameters['RncComprador'] = $buyerIdentification;
        }

        return sprintf(
            '%s/%s?%s',
            $base_url,
            'ConsultaTimbre',
            http_build_query($parameters)
        );
    }

    /**
     * @throws RequestException
     * @throws ConnectionException
     */
    public function sendRFCE(Env|string $env, string $token, string $xmlPath): array
    {
        if (is_string($env)) {
            $env = Env::fromName($env);
        }

        $url = config('dgii.domains.fc').'/'.$env->name.'/recepcionfc/api/recepcion/ecf';

        $contents = fopen(Storage::path($xmlPath), 'rb');

        return Http::withToken($token)
            ->attach('xml', $contents)
            ->post($url)
            // ->throw()
            ->json();
    }

    public function getRFCEQRLink(Env|string $env, string $senderIdentification, string $sequenceNumber, string $total, string $securityCode): string
    {
        if (is_string($env)) {
            $env = Env::fromName($env);
        }

        $parameters = [
            'RncEmisor' => $senderIdentification,
            'ENCF' => $sequenceNumber,
            'MontoTotal' => $total,
            'CodigoSeguridad' => $securityCode,
        ];

        $base_url = sprintf('%s/%s', config('dgii.domains.fc'), $env->name);

        return sprintf(
            '%s/%s?%s',
            $base_url,
            'ConsultaTimbreFC',
            http_build_query($parameters)
        );
    }

    /**
     * @throws RequestException
     * @throws ConnectionException
     */
    public function sendACECF(Env|string $env, string $token, string $xmlPath): array
    {
        if (is_string($env)) {
            $env = Env::fromName($env);
        }

        $url = config('dgii.domains.ecf').'/'.$env->name.'/aprobacioncomercial/api/aprobacioncomercial';

        $contents = fopen(Storage::path($xmlPath), 'rb');

        return Http::withToken($token)
            ->attach('xml', $contents)
            ->post($url)
            ->throw()
            ->json();
    }
}
