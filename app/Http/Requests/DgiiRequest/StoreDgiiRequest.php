<?php

namespace App\Http\Requests\DgiiRequest;

use App\Enums\DgiiRequest\StatusEnum;
use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreDgiiRequest extends FormRequest
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
            'status' => ['required', 'integer', Rule::in(StatusEnum::getValues())],
            'signed_xml' => ['required', 'string'],
            'user_id' => ['required', Rule::exists(User::class, 'id')],
        ];
    }
}
