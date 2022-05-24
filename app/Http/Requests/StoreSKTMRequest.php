<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class StoreSKTMRequest extends FormRequest
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
          'foto_rumah_depan'  => 'required|image',
          'foto_rumah_samping'  => 'required|image',
          'tanda_pbb'  => 'required',
          'pengantar'  => 'required|image',
        ];
    }
}
