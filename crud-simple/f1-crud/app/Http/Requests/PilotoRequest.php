<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PilotoRequest extends FormRequest
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
			'equipo_id' => 'required',
			'nombre_pilot' => 'required|string',
			'apellido' => 'required|string',
			'nacimiento' => 'required',
			'nacionalidad' => 'required|string',
			'n_coche' => 'required',
        ];
    }
}
