<?php

namespace App\Http\Requests\DgiiRequest;

use Illuminate\Foundation\Http\FormRequest;

class StoreEcfRequest extends FormRequest
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
            'IdDoc.TipoeCF' => ['required', 'integer'],
            'IdDoc.eNCF' => ['required', 'string'],
            'IdDoc.FechaVencimientoSecuencia' => ['required', 'date_format:d-m-Y'],
            'IdDoc.IndicadorMontoGravado' => ['required', 'integer'],
            'IdDoc.TipoIngresos' => ['required', 'string'],
            'IdDoc.TipoPago' => ['required', 'integer'],
            'IdDoc.FechaLimitePago' => ['sometimes', 'nullable', 'date_format:d-m-Y'],


            'Emisor.RNCEmisor' => ['required', 'string'],
            'Emisor.RazonSocialEmisor' => ['required', 'string'],
            'Emisor.NombreComercial' => ['required', 'string'],


            'Comprador.RNCComprador' => ['required', 'string'],
            'Comprador.RazonSocialComprador' => ['required', 'string'],


            'Totales.MontoGravadoTotal' => ['sometimes', 'nullable', 'numeric'],
            'Totales.MontoGravadoI1' => ['sometimes', 'nullable', 'numeric'],
            'Totales.MontoGravadoI2' => ['sometimes', 'nullable', 'numeric'],
            'Totales.MontoGravadoI3' => ['sometimes', 'nullable', 'numeric'],
            'Totales.MontoExento' => ['sometimes', 'nullable', 'numeric'],
            'Totales.ITBIS1' => ['sometimes', 'nullable', 'numeric'],
            'Totales.ITBIS2' => ['sometimes', 'nullable', 'numeric'],
            'Totales.ITBIS3' => ['sometimes', 'nullable', 'numeric'],
            'Totales.TotalITBIS' => ['required', 'numeric'],
            'Totales.TotalITBIS1' => ['sometimes', 'nullable', 'numeric'],
            'Totales.TotalITBIS2' => ['sometimes', 'nullable', 'numeric'],
            'Totales.TotalITBIS3' => ['sometimes', 'nullable', 'numeric'],
            'Totales.MontoTotal' => ['required', 'numeric'],


            'DetallesItems' => ['required', 'array'],
            'DetallesItems.*.IndicadorFacturacion' => ['required', 'integer'],
            'DetallesItems.*.NombreItem' => ['required', 'string'],
            'DetallesItems.*.IndicadorBienoServicio' => ['required', 'integer'],
            'DetallesItems.*.CantidadItem' => ['required', 'numeric'],
            'DetallesItems.*.PrecioUnitarioItem' => ['required', 'numeric'],
            'DetallesItems.*.MontoItem' => ['required', 'numeric'],
        ];
    }
}
