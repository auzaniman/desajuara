<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class StoreBerkasRequest extends FormRequest
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
          'foto_kk' => 'required|image',
          'foto_ktp' => 'required|image',
          'foto_diri' => 'required|image',
          'akta_kelahiran' => 'required|image',
          'paspoto' => 'required|image',
        ];
    }
}
