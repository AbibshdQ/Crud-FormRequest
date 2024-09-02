<?php

namespace App\Http\Controllers;

use App\Http\Requests\EmployeeRequest;
use App\Services\Employee\EmployeeService;
use RealRashid\SweetAlert\Facades\Alert;

class EmployeeController extends Controller
{
    protected $employeeService;

    public function __construct(EmployeeService $employeeService) {
        $this->employeeService = $employeeService;
    }

    public function index() {
        $employees = $this->employeeService->getAllEmployees();
        return view('Employee.index', compact('employees'));
    }

    public function create() {
        return view('Employee.create');
    }

    public function store(EmployeeRequest $request) {

        $validated = $request->validated();
        $this->employeeService->createEmployee($validated);

        Alert::success('Success', 'Data berhasil disimpan');
        return redirect('/employee-backend');
    }

    public function edit(string $id) {
        $employee = $this->employeeService->getEmployeeById($id);
        return view('Employee.edit', compact('employee'));
    }

    public function update(EmployeeRequest $request, string $id) {

        $validated = $request->validated();
        $this->employeeService->updateEmployee($id, $validated);
        
        Alert::success('Success', 'Data Berhasil di Update');
        return redirect('/employee-backend');
    }

    public function destroy(string $id) {

        $this->employeeService->deleteEmployee($id);
        Alert::success('Success', 'Data Berhasil di Hapus');
        return redirect('/employee-backend');
    }
}
