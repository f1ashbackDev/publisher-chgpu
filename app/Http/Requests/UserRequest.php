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
        return [
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
            'number_phone' => 'required|max:11',
        ];
    }

    public function messages(): array
    {
        return [
            'firstname.required' => 'Поле Фамилия не должен быть пустой!',
            'firstname.string' => 'Поле Фамилия должна состоять из букв!',
            'lastname.required' => 'Поле Имя не должен быть пустой!',
            'lastname.string' => 'Поле Имя должен состоять только из букв',
            'email.required' => 'Поле Почта не должен быть пустой',
            'email.email' => 'Электронная почта должна быть действительной',
            'email.unique' => 'Электронная почта уже существует',
            'password.required' => 'Пароль обязателен',
            'password.min' => 'Пароль должен состоять не менее чем из 6 символов',
            'password.confirmed' => 'Пароль не совпадает',
            'number_phone.required' => 'Номер телефона обязателен',
            'number_phone.max' => 'Номер телефона должен состоять из 10 цифр',
        ];
    }
}
