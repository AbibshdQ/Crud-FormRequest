<?php

namespace App\Repositories\Office;

use App\Models\Office;
use Illuminate\Database\Eloquent\Collection;

class OfficeRepositoryImplement implements OfficeRepository {

    public function getAll(): Collection {
        return Office::all(); 
    }

    public function findById($id): ?Office {
        return Office::find($id);
    }

    public function findOrFail($id): Office {
        return Office::findOrFail($id);
    }

    public function create(array $data): ?Office {
        return Office::create($data);
    }

    public function update($id, array $data): bool {
        $office = Office::findOrFail($id);
        return $office->update($data);
    }

    public function delete($id): bool {
        return Office::destroy($id);
    }
}
