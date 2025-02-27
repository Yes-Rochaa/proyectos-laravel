<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ResultadoRequest extends FormRequest
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
			'carrera_id' => 'required',
			'piloto_id' => 'required',
			'posicion_final' => 'required',
			'puntos' => 'required',
			'v_completas' => 'required',
			'mejor_vuelta' => 'required',
			'estado' => 'required',
        ];
    }
}
