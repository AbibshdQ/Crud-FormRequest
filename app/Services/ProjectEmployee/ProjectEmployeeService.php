<?php

namespace App\Services\ProjectEmployee;

interface ProjectEmployeeService
{
    public function getAll();
    public function getAllEmployees();  
    public function getAllProjects();  
    public function assignProject($employeeId, $projectId);
    public function getById($id);
    public function update($id, $data);
    public function delete($id);
}
