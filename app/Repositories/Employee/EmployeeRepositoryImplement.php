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
        return Employee::create($data);
    }

    public function update($id, array $data): bool {
        $employee = Employee::findOrFail($id);
        return $employee->update($data);
    }

    public function delete($id): bool {
        return Employee::destroy($id) > 0;
    }
}
