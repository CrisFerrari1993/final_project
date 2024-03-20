<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProfileUpdateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'firstName' => ['string', 'max:255', 'required'],
            'lastName' => ['string', 'required'],
            'email' => ['email', 'max:255', Rule::unique(User::class)->ignore($this->user()->id)],
            'password' => ['required']
        ];
    }
    public function messages()
    {

        return [
            //firstName validation
            'firstName.required' => "Per favore inserire un nome",
            'firstName.max:255' => "Il nome non può superare i 255 caratteri",
            'firstName.string' => "Il nome non può essere un numero",
            //lastName validation
            'lastName.required' => "Per favore inserire un cognome",
            'lastName.string' => "Il cognome non può essere un numero",
            //email validation
            'email.email' => "Il dato inserito deve essere una mail valida",
            'email.max:255' => "La email non può superare i 255 caratteri",
            //password validation
            'password.required' => "Per favore inserire una password"
        ];
    }
}
