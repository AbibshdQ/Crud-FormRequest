<?php

namespace App\Services\Employee;

use LaravelEasyRepository\ServiceApi;
use App\Repositories\Employee\EmployeeRepository;

class EmployeeServiceImplement extends ServiceApi implements EmployeeService {
    protected $repository;

    public function __construct(EmployeeRepository $repository) {
        $this->repository = $repository;
    }

    public function getAllEmployees() {
        return $this->repository->getAll(); // Menggunakan getAll() dari EmployeeRepository
    }

    public function getEmployeeById($id) {
        return $this->repository->findById($id); // Menggunakan findById() dari EmployeeRepository
    }

    public function createEmployee(array $data) {
        return $this->repository->create($data); // Menggunakan create() dari EmployeeRepository
    }

    public function updateEmployee($id, array $data) {
        return $this->repository->update($id, $data); // Menggunakan update() dari EmployeeRepository
    }

    public function deleteEmployee($id) {
        return $this->repository->delete($id); // Menggunakan delete() dari EmployeeRepository
    }
}
