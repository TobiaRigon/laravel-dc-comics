<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ComicFormRequest extends FormRequest
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

                'title' => 'required|string|min:2|max:255',
                'author' => 'required|string|min:2|max:255',
                'description' => 'nullable|string',
                'price' => 'required|numeric|min:0.01',
        ];
    }
    public function messages() {
        return [
                'title.required' => 'Il titolo è obbligatorio.',
                'title.string' => 'Il titolo deve essere una stringa.',
                'title.min' => 'Il titolo deve contenere almeno :min caratteri.',
                'title.max' => 'Il titolo non può superare :max caratteri.',
                'author.required' => 'L\'autore è obbligatorio.',
                'author.string' => 'L\'autore deve essere una stringa.',
                'author.min' => 'L\'autore deve contenere almeno :min caratteri.',
                'author.max' => 'L\'autore non può superare :max caratteri.',
                'description.string' => 'La descrizione deve essere una stringa.',
                'price.required' => 'Il prezzo è obbligatorio.',
                'price.numeric' => 'Il prezzo deve essere un numero.',
                'price.min' => 'Il prezzo non può essere inferiore a :min.',
            ];
    }
}
