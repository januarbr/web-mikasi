<?php

namespace App\Http\Requests\admin;

use Illuminate\Foundation\Http\FormRequest;

class Framework extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'jurusan'=>'required|max:255',
            'semester'=>'required|max:255',
            'matakuliah'=>'required|max:255',
            'tema'=>'required|max:255',
            'file'=>'required|max:255'
        ];
        
    }
}
