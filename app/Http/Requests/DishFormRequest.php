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
            'description' => 'required',
            'price' => 'required|gt:0',
            'aviability' => 'required',
            //'image' => 'required',
        ];
    }

    // messaggi in caso di dato inserito non valido
    public function messages()
    {

        return [
            'name.required' => "Per favore inserire nome piatto",
            'description.required' => 'L\'inserimento di una descrizione è obbligatorio',
            'image.required' => "Per favore inserire un'immagine",
            'price.required' => "Per favore inserire il prezzo del piatto",
            'price.gt' => "Per favore inserire un prezzo positivo",
            'aviability.required' => "Per favore indicare la disponibilità attuale",
        ];
    }
}
