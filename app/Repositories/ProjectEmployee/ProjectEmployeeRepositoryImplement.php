<?php

namespace App\Repositories\ProjectEmployee;

use App\Models\ProjectEmployee;
use LaravelEasyRepository\Implementations\Eloquent;

class ProjectEmployeeRepositoryImplement extends Eloquent implements ProjectEmployeeRepository {

    protected $model;

    public function __construct(ProjectEmployee $model) {
        $this->model = $model;
    }

    public function assignProjectToEmployee($employeeId, $projectId) {
      
        return $this->create([
            'employee_id' => $employeeId,
            'project_id' => $projectId,
        ]);
    }

    public function removeProjectFromEmployee($employeeId, $projectId) {
        
        return $this->model->where('employee_id', $employeeId)
            ->where('project_id', $projectId)
            ->delete();
    }

    public function getAll() {
        return ProjectEmployee::with(['employee', 'project'])->get();
    }
    

    public function getById($id) {
         
        return $this->findOrFail($id);
    }

    public function update($id, $data) {
       
        return $this->model->where('id', $id)->update($data);
    }

    public function delete($id) {
        
        return $this->model->where('id', $id)->delete();
    }
}
