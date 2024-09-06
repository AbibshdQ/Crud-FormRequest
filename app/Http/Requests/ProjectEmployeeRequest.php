<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProjectEmployeeRequest extends FormRequest
{
    public function authorize() {
        return true;  
    }

    public function rules() {
        return [
            'employee_id' => 'required|exists:employees,id',
            'project_id' => 'required|exists:projects,id',
        ];
    }
}
