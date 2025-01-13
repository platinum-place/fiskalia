<?php

namespace App\Actions\Cert;

use Exception;
use Carbon\Carbon;
use App\Models\Cert;
use Lorisleiva\Actions\Concerns\AsAction;

class GetActiveCert
{
    use AsAction;

    public function handle()
    {
        $cert = Cert::latest()
            ->whereDate('due_date', '<=', Carbon::now())
            ->get()
            ->first();

        if (empty($cert)) {
            throw new Exception(__(':name not Found', ['name' => __('Cert')]));
        }

        return $cert;
    }
}
