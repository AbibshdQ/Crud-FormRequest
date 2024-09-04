<?php

namespace App\Repositories\Office;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

interface OfficeRepository {
    public function getAll(): Collection;
    public function findById($id): ?Model;
    public function create(array $data): ?Model;
    public function update($id, array $data): bool;
    public function delete($id): bool;
}
