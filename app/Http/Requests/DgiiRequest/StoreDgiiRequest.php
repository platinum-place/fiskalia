<?php

namespace App\Http\Requests\DgiiRequest;

use Illuminate\Foundation\Http\FormRequest;

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
            'IdDoc' => ['required', 'array'],
            'IdDoc.eNCF' => ['required', 'string', 'starts_with:E'],
            'IdDoc.FechaVencimientoSecuencia' => ['required', 'date_format:d-m-Y'],
            'IdDoc.TipoIngresos' => ['required', 'string'],
            'IdDoc.TipoPago' => ['required', 'integer'],
            'IdDoc.FechaLimitePago' => ['nullable', 'date_format:d-m-Y'],

            'Emisor' => ['required', 'array'],
            'Emisor.RNCEmisor' => ['required', 'string'],
            'Emisor.RazonSocialEmisor' => ['required', 'string'],
            'Emisor.NombreComercial' => ['required', 'string'],

            'Comprador' => ['required', 'array'],
            'Comprador.RNCComprador' => ['required', 'string'],
            'Comprador.RazonSocialComprador' => ['required', 'string'],

            'Totales' => ['required', 'array'],
            'Totales.MontoGravadoTotal' => ['required', 'numeric'],
            'Totales.MontoGravadoI1' => ['nullable', 'numeric'],
            'Totales.MontoGravadoI2' => ['nullable', 'numeric'],
            'Totales.MontoGravadoI3' => ['nullable', 'numeric'],
            'Totales.MontoExento' => ['nullable', 'numeric'],
            'Totales.ITBIS1' => ['nullable', 'numeric'],
            'Totales.ITBIS2' => ['nullable', 'numeric'],
            'Totales.ITBIS3' => ['nullable', 'numeric'],
            'Totales.TotalITBIS' => ['required', 'numeric'],
            'Totales.TotalITBIS1' => ['nullable', 'numeric'],
            'Totales.TotalITBIS2' => ['nullable', 'numeric'],
            'Totales.TotalITBIS3' => ['nullable', 'numeric'],
            'Totales.MontoTotal' => ['required', 'numeric'],
        ];
    }
}
