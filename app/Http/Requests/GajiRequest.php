<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GajiRequest extends FormRequest
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
            'file_pangkat_terakhir' => 'required|mimes:pdf|max:4096',
            'file_gaji_berkala'     => 'required|mimes:pdf|max:4096',
            'file_dokumen_simpedu'  => 'required|mimes:pdf|max:4096',
        ];
    }
}
