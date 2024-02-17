<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleRequest extends FormRequest
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
            'name' => 'required|min:5|max:255',
            'email' => 'required|min5|max:255|email'
        ];
    }
    
    /**
     * Get the validation message that apply to the request.
     */
    public function messages(){
        return [
            'name.required' => 'Le champ Name est requis',
            'email.required' => 'Le champ Email est requis',
            'email.email' => 'L\'email renseigné n\'est pas valide',
            'email.min' => 'Ce champ doit faire au moins 5 caractères'
        ];
    }
}
