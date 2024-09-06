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

     
    public function rules()
{
    return [
        'name' => 'required|string|max:255',
        'gender' => 'required|string',
        'day_of_birth' => 'required|date',
        'place_of_birth' => 'required|string|max:255',
        'address' => 'required|string',
        'status' => 'required|string|max:255',
        'entry_date' => 'required|date',
        'office_id' => 'required|exists:offices,id',
        'projects' => 'nullable|array',
        'projects.*' => 'exists:projects,id',
    ];
}

}
