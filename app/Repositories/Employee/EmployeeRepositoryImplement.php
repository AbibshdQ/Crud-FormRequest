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

    public function find($id) {
        return Employee::find($id);
    }

    public function findOrFail($id) {
        return Employee::findOrFail($id);
    }

    public function all() {
        return Employee::all();
    }

    public function create(array $data) {
        return Employee::create($data);
    }

    public function update($id, array $data) {
        $employee = Employee::findOrFail($id);
        return $employee->update($data);
    }

    public function delete($id) {
        return Employee::destroy($id);
    }

    public function destroy($id) {
        return Employee::destroy($id);
    }
}
