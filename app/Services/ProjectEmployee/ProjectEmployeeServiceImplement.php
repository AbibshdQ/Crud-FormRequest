<?php
namespace App\Services\ProjectEmployee;

use App\Models\Employee;
use App\Models\Project;
use App\Models\ProjectEmployee;

class ProjectEmployeeServiceImplement implements ProjectEmployeeService
{
    public function getAll() {
        return ProjectEmployee::with('employee', 'project')->get();  
    }

    public function getAllEmployees() {
        return Employee::all();
    }

    public function getAllProjects() {
        return Project::all();
    }

    public function assignProject($employeeId, $projectId) {
         
        $existingAssignment = ProjectEmployee::where('employee_id', $employeeId)
                                             ->where('project_id', $projectId)
                                             ->first();
        if ($existingAssignment) {
             
            return;
        }

        ProjectEmployee::create([
            'employee_id' => $employeeId,
            'project_id' => $projectId,
        ]);
    }

    public function getById($id) {
        return ProjectEmployee::with('employee', 'project')->find($id);
    }

    public function update($id, $data) {
        $projectEmployee = $this->getById($id);

        if ($projectEmployee) {
            $projectEmployee->update($data);
        }
    }

    public function delete($id) {
        $projectEmployee = $this->getById($id);

        if ($projectEmployee) {
            $projectEmployee->delete();
        }
    }
}
