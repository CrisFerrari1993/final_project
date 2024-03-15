<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DishFormRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'price' => 'required|gt:0',
            'aviability' => 'required'
        ];
    }

    // messaggi in caso di dato inserito non valido
    public function messages()
    {

        return [
            'name.required' => "Perfavore inserire nome piatto",
            'price.required' => "Perfavore inserire il prezzo del piatto",
            'price.gt' => "Il prezzo deve essere un valore positivo",
            'aviability.required' => "Indicare la disponibilità attuale"
        ];
    }
}
