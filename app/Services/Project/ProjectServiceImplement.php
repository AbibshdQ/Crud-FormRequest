<?php
namespace App\Services\Project;

use App\Repositories\Project\ProjectRepository;

class ProjectServiceImplement implements ProjectService
{
    protected $repository;

    public function __construct(ProjectRepository $repository) {
        $this->repository = $repository;
    }

    public function getAllProjects() {
        return $this->repository->getAll();
    }

    public function getProjectById($id) {
        return $this->repository->findById($id);
    }

    public function createProject(array $data) {
        return $this->repository->create($data);
    }

    public function updateProject($id, array $data) {
        return $this->repository->update($id, $data);
    }

    public function deleteProject($id) {
        return $this->repository->delete($id);
    }
}
