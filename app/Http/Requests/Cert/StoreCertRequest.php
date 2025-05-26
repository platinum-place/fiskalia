<?php

namespace App\Http\Requests\Cert;

use Illuminate\Foundation\Http\FormRequest;

class StoreCertRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'cert' => ['required', 'file'/** 'mimetypes:application/x-pkcs12,application/pkcs12' */],
            'password' => ['required', 'string', 'max:255'],
            'due_date' => ['required', 'date'],
        ];
    }
}
