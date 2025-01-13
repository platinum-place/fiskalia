<?php

namespace App\Rules\Cert;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class ValidateCertPassword implements ValidationRule
{
    public function __construct(protected string $certContent)
    {

    }

    /**
     * Run the validation rule.
     *
     * @param  \Closure(string, ?string=): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        if (!openssl_pkcs12_read($this->certContent, $certs, $value)) {
            $fail(__('validation.current_password'));
        }
    }
}
