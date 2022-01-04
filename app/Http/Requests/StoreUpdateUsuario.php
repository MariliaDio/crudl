<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateUsuario extends FormRequest
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
            'nomec' => 'required',
            'cpf' => ['required', 'cpf'],
            'whats' => 'required',
            'foto' => ['required', 'image'],
            'idade' => 'required'
        ];
    }
}
