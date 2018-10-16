<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

// Maximo de caracteres para la descripcion
const MAX_CHAR = 90;

class CreatePhotoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
			'description' => ['required', 'max:'.MAX_CHAR]
		];
    }

	public function messages()
	{
		return [
			'description.required' => 'Campo requerido',
			'description.max' => 'Maximo de caracteres: '.MAX_CHAR
		];
	}
}
