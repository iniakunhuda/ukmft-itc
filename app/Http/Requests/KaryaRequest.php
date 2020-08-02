<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class KaryaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return \Auth::check();
    }

    public function rules()
    {
        return [
            'judul' => 'required|max:255',
            'kategori_id' => 'required',
            'desc_singkat' => 'required',
            'desc' => 'required',
        ];
    }


    public function attributes()
    {
        return [
            'kategori_id' => 'Kategori Karya',
            'desc' => 'Deskripsi',
            'desc_singkat' => 'Deskripsi Singkat',
            'judul' => 'Judul'
        ];
    }

    public function messages()
    {
        return [
            'required' => ':attribute wajib diisi',
            'max' => ':attribute maksimal :max',
        ];
    }
}
