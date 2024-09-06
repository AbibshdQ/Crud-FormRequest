<?php
namespace App\Http\Controllers;

use App\Http\Requests\OfficeRequest;
use App\Services\Office\OfficeService;
use App\Services\Office\OfficeServiceImplement;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;

class OfficeController extends Controller
{
    protected $officeService;

    public function __construct(OfficeServiceImplement $officeService) {
        $this->officeService = $officeService;
    }

    public function index() {
        $offices = $this->officeService->getAllOffices();
        return view('office.index', compact('offices'));
    }

    public function create() {
        return view('office.create');
    }

    public function store(OfficeRequest $request) {
        $validated = $request->validated();
        $this->officeService->createOffice($validated);

        Alert::success('Success', 'Data berhasil disimpan');
        return redirect()->route('office.index');
    }

    public function edit(string $id) {
        $office = $this->officeService->getOfficeById($id);
        return view('office.edit', compact('office'));
    }

    public function update(OfficeRequest $request, string $id) {
        $validated = $request->validated();
        $this->officeService->updateOffice($id, $validated);
        
        Alert::success('Success', 'Data Berhasil di Update');
        return redirect()->route('office.index');
    }

    public function destroy(string $id) {
        $this->officeService->deleteOffice($id);
        Alert::success('Success', 'Data Berhasil di Hapus');
        return redirect()->route('office.index');
    }
}
