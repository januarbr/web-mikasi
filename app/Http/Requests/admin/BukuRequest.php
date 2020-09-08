<?php

namespace App\Http\Requests\admin;

use Illuminate\Foundation\Http\FormRequest;

class BukuRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'kode_anggota'=>'required|max:255',
            'nama_anggota'=>'required|max:255',
            'alamat_anggota'=>'required',
        ];
    }
}
