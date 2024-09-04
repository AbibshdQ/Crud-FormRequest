<?php

namespace App\Services\Employee;

use LaravelEasyRepository\BaseService;

interface EmployeeService extends BaseService {
    public function getAllEmployees();
    public function getEmployeeById($id);
    public function createEmployee(array $data);
    public function updateEmployee($id, array $data);
    public function deleteEmployee($id);
}
