<?php

namespace App\Repositories\Employee;

use App\Models\Employee;

class EmployeeRepositoryImplement implements EmployeeRepository {

    public function getAll() {
        return Employee::all();
    }

    public function findById($id) {
        return Employee::find($id);
    }

    public function findOrFail($id) {
        return Employee::findOrFail($id);
    }

    public function create(array $data) {
        $employee = Employee::create($data);
    
        if (isset($data['projects'])) {
            $employee->projects()->attach($data['projects']);
        }
    
        return $employee;
    }
    
    public function update($id, array $data) {
        $employee = Employee::findOrFail($id);
        $employee->update($data);
    
        if (isset($data['projects'])) {
            $employee->projects()->sync($data['projects']);
        }
    
        return $employee;
    }

    public function delete($id): bool {
        return Employee::destroy($id) > 0;
    }
}
