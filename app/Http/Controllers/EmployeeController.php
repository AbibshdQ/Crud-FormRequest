<?php

namespace App\Http\Controllers;

use App\Http\Requests\EmployeeRequest;
use App\Services\Employee\EmployeeService;
use App\Services\Office\OfficeService; // pastikan OfficeService digunakan
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    protected $employeeService;
    protected $officeService;  

    public function __construct(EmployeeService $employeeService, OfficeService $officeService) {
        $this->employeeService = $employeeService;
        $this->officeService = $officeService;  
    }

    public function index() {
        $employees = $this->employeeService->getAllEmployees();
        return view('employee.index', compact('employees'));
    }

    public function create() {
        $offices = $this->officeService->getAllOffices();  // Menggunakan OfficeService untuk mendapatkan data office
        return view('employee.create', compact('offices'));
    }

    public function store(EmployeeRequest $request) {
        $validated = $request->validated();
        $this->employeeService->createEmployee($validated);
    
        Alert::success('Success', 'Data berhasil disimpan');
        return redirect()->route('employee.index');
    }
    

    public function edit(string $id) {
        $employee = $this->employeeService->getEmployeeById($id);
        $offices = $this->officeService->getAllOffices();  // Menggunakan OfficeService untuk mendapatkan data office
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
