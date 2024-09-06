<?php
namespace App\Repositories\Project;

use App\Models\Project;

class ProjectRepositoryImplement implements ProjectRepository
{
    public function getAll() {
        return Project::all();
    }

    public function findById($id) {
        return Project::find($id);
    }

    public function create(array $data) {
        return Project::create($data);
    }

    public function update($id, array $data) {
        $project = Project::findOrFail($id);
        return $project->update($data);
    }

    public function delete($id) {
        return Project::destroy($id) > 0;
    }
}
