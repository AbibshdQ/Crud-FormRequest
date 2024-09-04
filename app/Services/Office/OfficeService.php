<?php

namespace App\Services\Office;

use LaravelEasyRepository\BaseService;

interface OfficeService extends BaseService {
    public function getAllOffices();
    public function getOfficeById($id);
    public function createOffice(array $data);
    public function updateOffice($id, array $data);
    public function deleteOffice($id);
}
