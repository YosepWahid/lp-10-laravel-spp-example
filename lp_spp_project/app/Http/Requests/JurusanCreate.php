<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class JurusanCreate extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'nama_jurusan' => 'required',
            'kepanjangan' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'nama_jurusan.required' => "maaf singkatan jurusan tidak boleh kosong",
            'kepanjangan.required' => "maaf kepanjangan jurusan tidak boleh kosong",
        ];
    }
}
