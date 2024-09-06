<?php

namespace App\Services\Office;

use LaravelEasyRepository\ServiceApi;
use App\Repositories\Office\OfficeRepository;
use App\Repositories\Office\OfficeRepositoryImplement;

class OfficeServiceImplement extends ServiceApi implements OfficeService {

    protected $repository;

    public function __construct(OfficeRepositoryImplement $repository) {
        $this->repository = $repository;
    }

    public function getAllOffices() {
        return $this->repository->getAll();  
    }

    public function getOfficeById($id) {
        return $this->repository->findById($id);  
    }

    public function createOffice(array $data) {
        return $this->repository->create($data);  
    }

    public function updateOffice($id, array $data) {
        return $this->repository->update($id, $data);  
    }

    public function deleteOffice($id) {
        return $this->repository->delete($id); 
    }
}
