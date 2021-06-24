<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PensiunRequest extends FormRequest
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
            'file_sk_pns'          => 'required|mimes:pdf|max:4096',
            'file_karis_karsu'     => 'required|mimes:pdf|max:4096',
            'file_kartu_pegawai'   => 'required|mimes:pdf|max:4096',
            'file_fotocopy_ktp'    => 'required|mimes:pdf|max:4096',
            'file_fotocopy_kk'     => 'required|mimes:pdf|max:4096',
            'file_akta_nikah'      => 'required|mimes:pdf|max:4096',
            'file_dokumen_taspen'  => 'required|mimes:pdf|max:4096',
        ];
    }
}
