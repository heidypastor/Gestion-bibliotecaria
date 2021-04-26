<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreLibroRequest extends FormRequest
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
            'nombrelibro' => 'required|max:100',
            'autorlibro' => 'required|max:100',
            'categorialibro' => 'required|max:100',
            'cantidadlibro' => 'required|max: 10'
        ];
    }
}
