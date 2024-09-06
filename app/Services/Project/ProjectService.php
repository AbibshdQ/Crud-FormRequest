<?php

namespace App\Services\Project;

interface ProjectService
{
    public function getAllProjects();
    public function getProjectById($id);
    public function createProject(array $data);
    public function updateProject($id, array $data);
    public function deleteProject($id);
}
