<?php

namespace App\Http\Controllers;

use App\Http\Requests\PegawaiRequest;
use App\Models\Pegawai;
use RealRashid\SweetAlert\Facades\Alert;

class PegawaiController extends Controller
{
    public function index()
    {
        $pegawais = Pegawai::all();
        return view('pegawai.index', compact('pegawais'));
    }

    public function create()
    {
        return view('pegawai.create');
    }

    public function store(PegawaiRequest $request)
    {
        $validated = $request->validated();
        Pegawai::create($validated);

        Alert::success('Success', 'Data berhasil disimpan');
        return redirect('/pegawai-backend');
    }

    public function edit(string $id)
    {
        return view('pegawai.edit', [
            'pegawais' => Pegawai::find($id)
        ]);
    }

    public function update(PegawaiRequest $request, string $id)
    {
        $validated = $request->validated();
        $data = Pegawai::findOrFail($id);
        $data->update($validated);

        Alert::success('Success', 'Data Berhasil di Update');
        return redirect('/pegawai-backend');
    }

    public function destroy(string $id)
    {
        Pegawai::destroy($id);
        Alert::success('Success', 'Data Berhasil di Hapus');
        return redirect('/pegawai-backend');
    }
}
