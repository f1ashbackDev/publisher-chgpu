<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DepartRequest extends FormRequest
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
            'name' => 'required|unique:departs,name',
            'total_count' => 'required|numeric|min:1',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Название объязательное.',
            'name.unique' => 'Такой отдел уже существует.',
            'total_count.required' => 'Поле бюджет не должно быть пустое.',
            'total_count.numeric' => 'Бюджет должен быть числами.',
            'total_count.min' => 'Минимально 1 рублей.'
        ];
    }
}
