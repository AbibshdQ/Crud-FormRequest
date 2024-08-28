<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmployeeRequest extends FormRequest
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
            'name' => 'required|string|max:25',
            'gender' => 'required|string',
            'day_of_birth' => 'required|date',
            'place_of_birth' => 'required|string|max:75',
            'address' => 'required|string|max:120',  // Pastikan 'address' termasuk di sini
            'status' => 'required|string',
            'entry_date' => 'required|date',
        ];
    }
}
