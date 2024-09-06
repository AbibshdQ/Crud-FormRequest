<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProjectEmployeeRequest; 
use App\Services\ProjectEmployee\ProjectEmployeeService;
use RealRashid\SweetAlert\Facades\Alert;

class ProjectEmployeeController extends Controller
{
    protected $projectEmployeeService;

    public function __construct(ProjectEmployeeService $projectEmployeeService) {
        $this->projectEmployeeService = $projectEmployeeService;
    }

    public function index() {
        $employeeProjects = $this->projectEmployeeService->getAll();
        return view('project-employee.index', compact('employeeProjects'));
    }

    public function create() {
        $employees = $this->projectEmployeeService->getAllEmployees();
        $projects = $this->projectEmployeeService->getAllProjects();
        return view('project-employee.create', compact('employees', 'projects'));
    }

    public function store(ProjectEmployeeRequest $request) {
        $validated = $request->validated();
        $this->projectEmployeeService->assignProject($validated['employee_id'], $validated['project_id']);

        Alert::success('Success', 'Project assigned to employee successfully');
        return redirect()->route('project-employee.index');
    }

    public function edit($id) {
        $projectEmployee = $this->projectEmployeeService->getById($id);
        return view('project-employee.edit', compact('projectEmployee'));
    }

    public function update(ProjectEmployeeRequest $request, $id) {
        $validated = $request->validated();
        $this->projectEmployeeService->update($id, $validated);

        Alert::success('Success', 'Project-employee relation updated successfully');
        return redirect()->route('project-employee.index');
    }

    public function destroy($id) {
        $this->projectEmployeeService->delete($id);

        Alert::success('Success', 'Project-employee relation deleted successfully');
        return redirect()->route('project-employee.index');
    }
}
