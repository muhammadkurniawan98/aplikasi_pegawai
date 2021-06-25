<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SKUsulanKenaikanPangkatRequest extends FormRequest
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
            'file_sk_usulan_kenaikan_pangkat' => 'required|mimes:pdf|max:4096',
        ];
    }
}
