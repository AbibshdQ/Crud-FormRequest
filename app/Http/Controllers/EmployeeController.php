<?php

namespace App\Http\Controllers;

use App\Http\Requests\EmployeeRequest;
use App\Models\Employee;
use RealRashid\SweetAlert\Facades\Alert;

class EmployeeController extends Controller
{

  
    public function index()
    {
        $Employees = Employee::all();
        return view('Employee.index', compact('Employees'));
    }

    public function create()
    {
        return view('Employee.create');
    }

    public function store(EmployeeRequest $request)
    {
        $validated = $request->validated();
    
        Employee::create($validated);
    
        Alert::success('Success', 'Data berhasil disimpan');
        return redirect('/employee-backend');
    }
    

    public function edit(string $id)
    {
        return view('Employee.edit', [
            'Employees' => Employee::find($id)
        ]);
    }

    public function update(EmployeeRequest $request, string $id)
    {
        $validated = $request->validated();
        $data = Employee::findOrFail($id);
        $data->update($validated);

        Alert::success('Success', 'Data Berhasil di Update');
        return redirect('/employee-backend');
    }

    public function destroy(string $id)
    {
        Employee::destroy($id);
        Alert::success('Success', 'Data Berhasil di Hapus');
        return redirect('/employee-backend');
    }
}
