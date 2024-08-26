<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PegawaiRequest extends FormRequest
{
    public function authorize()
    {
        return true; // Pastikan ini true jika tidak ada pembatasan akses
    }

    public function rules()
    {
        return [
            'namapeg' => 'required|string|max:255',
            'j_kel' => 'required|in:Laki Laki,Perempuan',
            'tgl_lahir' => 'required|date',
            'tmpt_lahir' => 'required|string|max:255',
            'alamat' => 'required|string',
            'stat_peg' => 'required|in:Aktif,Pensiun',
            'tgl_masuk' => 'required|date',
        ];
    }
}
