<?php

namespace App\Services\Employee;

use LaravelEasyRepository\ServiceApi;
use App\Repositories\Employee\EmployeeRepository;

class EmployeeServiceImplement extends ServiceApi implements EmployeeService {

    protected $repository;

    public function __construct(EmployeeRepository $repository) {
        $this->repository = $repository;
    }

    // Metode dari BaseService
    public function find($id) {
        return $this->repository->find($id);
    }

    public function findOrFail($id) {
        return $this->repository->findOrFail($id);
    }

    public function all() {
        return $this->repository->all();
    }

    public function create($data) {
      return $this->repository->create($data);
   }
  

    public function update($id, array $data) {
        return $this->repository->update($id, $data);
    }

    public function delete($id) {
        return $this->repository->delete($id);
    }

    public function destroy($id) {
        return $this->repository->destroy($id);
    }

  
    public function getAllEmployees() {
        return $this->repository->getAll();
    }

    public function getEmployeeById($id) {
        return $this->repository->findById($id);
    }

    public function createEmployee(array $data) {
        return $this->repository->create($data);
    }

    public function updateEmployee($id, array $data) {
        return $this->repository->update($id, $data);
    }

    public function deleteEmployee($id) {
        return $this->repository->delete($id);
    }
}
