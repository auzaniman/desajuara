<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class StoreSuketUsahaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
          'user_id' => 'required',
          'berkas_id'  => 'required',
          'nama_pemohon'  => 'required',
          'email_pemohon'  => 'required',
          'bidang_usaha'  => 'required',
          'nama_usaha'  => 'required',
          'alamat_usaha'  => 'required',
          'tahun_memulai'  => 'required',
          'jumlah_karyawan'  => 'required',
          'omzet'  => 'required',
          'aset'  => 'required',
          'pengantar'  => 'required|image',
        ];
    }
}
