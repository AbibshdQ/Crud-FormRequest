<?php

namespace App\Http\Controllers;

use App\Http\Requests\EmployeeRequest;
use App\Services\Employee\EmployeeService;
use App\Services\Employee\EmployeeServiceImplement;
use App\Services\Office\OfficeService;
use App\Services\Office\OfficeServiceImplement;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    protected $employeeService;
    protected $officeService;  

    public function __construct(EmployeeServiceImplement $employeeService, OfficeServiceImplement $officeService) {
        $this->employeeService = $employeeService;
        $this->officeService = $officeService;  
    }

    public function index() {
        $employees = $this->employeeService->getAllEmployees();
      

        return view('employee.index', compact('employees'));
    }

    public function create() {
        $employees = $this->employeeService->getAllEmployees();   
        $offices = $this->officeService->getAllOffices();   
        return view('employee.create', compact('employees', 'offices'));
    }

    public function store(EmployeeRequest $request) {
        $validated = $request->validated();
        $this->employeeService->createEmployee($validated);
    
        Alert::success('Success', 'Data berhasil disimpan');
        return redirect()->route('employee.index');
        // return redirect()->back()->withErrors(['name' => 'Tes name']);
    }
    

    public function edit(string $id) {
        $employee = $this->employeeService->getEmployeeById($id);
        $offices = $this->officeService->getAllOffices();   
        return view('employee.edit', compact('employee', 'offices'));
    }

    public function update(EmployeeRequest $request, string $id) {
        $validated = $request->validated();
        $this->employeeService->updateEmployee($id, $validated);
    
        Alert::success('Success', 'Data Berhasil di Update');
        return redirect()->route('employee.index');
    }
    

    public function destroy(string $id) {
        $this->employeeService->deleteEmployee($id);
        Alert::success('Success', 'Data Berhasil di Hapus');
        return redirect()->route('employee.index');
    }
}
