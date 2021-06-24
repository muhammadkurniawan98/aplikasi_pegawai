<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PangkatRequest extends FormRequest
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
            'file_pengantar'             => 'required|mimes:pdf|max:4096',
            'file_pns'                   => 'required|mimes:pdf|max:4096',
            'file_pangkat_terakhir'      => 'required|mimes:pdf|max:4096',
            'file_jabatan_fungsional'    => 'required|mimes:pdf|max:4096',
            'file_sertifikat_pendidikan' => 'required|mimes:pdf|max:4096',
            'file_kartu_pegawai'         => 'required|mimes:pdf|max:4096',
        ];
    }
}
