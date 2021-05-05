<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidationAnnouncement extends FormRequest
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
            'title'=>'required|min:5|max:15',
            'description'=>'required|min:20|max:50',
            'price'=>'required',
        ];
    }

    public function messages()
    {
        return [
            'title.required'=>"E' obbligatorio inserire un titolo",
            'title.min'=>"Inserire minimo 5 caratteri",
            'title.max'=>"Inserire massimo 15 caratteri",
            'description.min'=>"Inserire minimo 20 caratteri",
            'description.max'=>"Inserire massimo 50 caratteri",
            'description.required'=>"La descrizione e' obbligatoria",
            'price.required'=>"E' obbligatorio inserire un prezzo",
            'price.integer'=>"Il contenuto di prezzo deve essere un numero",
        ];
    }
}
