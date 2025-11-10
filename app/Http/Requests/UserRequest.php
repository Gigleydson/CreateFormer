<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
        $user = $this->route('user');

        return [
            'name' => 'required_if:name,!=,null',
            'email' => 'required_if:email,!=,null|email|unique:users,email,' . ($user ? $user->id : null),
            'password' => 'required_if:password,!=,null|min:6'
        ];
    }

    public function messages(): array
    {
        return [
            'name.required_if' => "O campo nome é obrigatório!",
            'email.required_if' => "O campo e-mail é obrigatório!",
            'email.email' => "Digite um e-mail válido!",
            'email.unique' => "O e-mail já está cadastrado!",
            'password.required_if' => "O campo senha é obrigatório!",
            'password.min' => "Senha com no mínimo :min caracteres!"
        ];
    }
}
