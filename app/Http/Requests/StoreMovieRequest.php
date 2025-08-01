<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreMovieRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     * TBD verificare che l'utente sia admin (is_admin)
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
            'cover' => ['mimes:jpg, jpeg, png, bmp', 'max:1024'],
            'title' => ['required', 'max:128', 'string'],
            'description' => ['required', 'max:2048', 'string'],
            'release_year' => ['integer'],
            'duration' => ['required'],
            'genre' => ['required', 'max:128'],
            'like' => ['integer', 'max:5'],
        ];
    }

    // /**
    //  * Undocumented function
    //  *
    //  * @return array
    //  */
    // public function messages(): array
    // {
    //     return [
    //         'name.required' => 'Nome libro richiesto',
    //         'name.max' => 'Nome troppo lungo (max 100 chars)',
    //         'author.required' => 'Nome autore richiesto',
    //         'author.max' => 'Nome troppo lungo (max 64 chars)',
    //         'page.integer' => 'Deve essere un numero intero',
    //         'year.integer' => 'Deve essere un numero intero',
    //     ];
    // }
}
