<?php

namespace App\Services\Office;

use LaravelEasyRepository\ServiceApi;
use App\Repositories\Office\OfficeRepository;

class OfficeServiceImplement extends ServiceApi implements OfficeService {

    protected $repository;

    public function __construct(OfficeRepository $repository) {
        $this->repository = $repository;
    }

    public function getAllOffices() {
        return $this->repository->getAll(); // Menggunakan getAll() dari OfficeRepository
    }

    public function getOfficeById($id) {
        return $this->repository->findById($id); // Menggunakan findById() dari OfficeRepository
    }

    public function createOffice(array $data) {
        return $this->repository->create($data); // Menggunakan create() dari OfficeRepository
    }

    public function updateOffice($id, array $data) {
        return $this->repository->update($id, $data); // Menggunakan update() dari OfficeRepository
    }

    public function deleteOffice($id) {
        return $this->repository->delete($id); // Menggunakan delete() dari OfficeRepository
    }
}
