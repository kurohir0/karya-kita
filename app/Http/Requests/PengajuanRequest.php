<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PengajuanRequest extends FormRequest
{
    public function rules()
    {
        return [
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'kategori' => 'required|string|max:255',
            'images' => 'required|array', // Pastikan ada array gambar
            'images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Validasi setiap gambar
        ];
    }

    public function messages()
    {
        return [
            'images.required' => 'Gambar karya harus diupload.',
            'images.array' => 'Gambar harus berupa array.',
            'images.*.image' => 'Setiap file harus berupa gambar.',
            'images.*.mimes' => 'Format gambar yang diperbolehkan: jpeg, png, jpg, gif.',
            'images.*.max' => 'Ukuran gambar maksimum 2MB.',
        ];
    }
}
