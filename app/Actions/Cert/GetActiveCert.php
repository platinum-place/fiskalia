<?php

namespace App\Actions\Cert;

use App\Models\Cert;
use Carbon\Carbon;
use Exception;
use Lorisleiva\Actions\Concerns\AsAction;

class GetActiveCert
{
    use AsAction;

    public function handle()
    {
        $cert = Cert::latest()
            ->whereDate('due_date', '>=', Carbon::now())
            ->get()
            ->first();

        if (empty($cert)) {
            throw new Exception(__(':name not Found', ['name' => __('Cert')]));
        }

        return $cert;
    }
}
