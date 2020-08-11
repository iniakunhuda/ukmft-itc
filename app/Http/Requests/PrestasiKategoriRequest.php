<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PrestasiKategoriRequest extends FormRequest
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

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'kategori' => 'required|max:255',
        ];
    }

    public function attributes()
    {
        return [
            'kategori' => 'Kategori Prestasi'
        ];
    }
    public function messages()
    {
        return [
            'required' => ':attribute wajib diisi'
        ];
    }

}
