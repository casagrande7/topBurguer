<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class ClienteFormRequest extends FormRequest
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
            'nome' => 'required|max:120|min:5',
            'telefone' => 'required|max:11|min:10',
            'email' => 'required|max:120|unique:cliente,email',
            'cpf' => 'required|max:11|min:11|unique:cliente,cpf',
            'endereco' => 'required|max:50|min:5',
            'password' => 'required',
            'foto' => 'required'
        ];
    }
    public function failedValidation(Validator $validator){
        throw new HttpResponseException(response()->json([
            'success' => false,
            'error' => $validator->errors()
        ]));
    }

    public function messages(){
        return [
            'nome.required' => 'O campo Nome é obrigatório',
            'nome.max' => 'O campo Nome deve conter no máximo 120 caracteres',
            'nome.min' => 'O campo Nome deve conter no mínimo 5 caracteres',
            'telefone.required' => 'O campo Celular é obrigatório',
            'telefone.max' => 'O campo Celular deve conter no máximo 11 caracteres',
            'telefone.min' => 'O campo Celular deve conter no mínimo 10 caracteres',
            'email.required' => 'O campo Email é obrigatório',
            'email.max' => 'O campo Email deve conter no máximo 120 caracteres',
            'email.unique' => 'Email já cadastrado no sistema',
            'cpf.required' => 'O campo CPF é obrigatório',
            'cpf.max' => 'O campo CPF deve conter no máximo 11 caracteres',
            'cpf.min' => 'O campo CPF deve conter no mínimo 11 caracteres',
            'cpf.unique' => 'CPF já cadastrado no sistema',
            'endereco.required' => 'O campo Endereço é obrigatório',
            'endereco.max' => 'O campo Endereço deve conter no máximo 50 caracteres',
            'endereco.min' => 'O campo Endereço deve conter no mínimo 5 caracteres',
            'password.required' => 'O campo Password é obrigatório',
            'foto.required' => 'O campo Foto é obrigatório'

        ];
    }
}
