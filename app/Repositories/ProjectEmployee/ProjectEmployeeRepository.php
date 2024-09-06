<?php

namespace App\Repositories\ProjectEmployee;

use LaravelEasyRepository\Repository;

interface ProjectEmployeeRepository extends Repository {
    public function assignProjectToEmployee($employeeId, $projectId);
    public function removeProjectFromEmployee($employeeId, $projectId);
    
}
