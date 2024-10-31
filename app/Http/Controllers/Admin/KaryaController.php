<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Karya;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class KaryaController extends Controller
{
    // Menampilkan daftar karya
    public function index()
    {
        // Mengambil karya dengan status 'confirmed'
        $karyaList = Karya::where('status', 'confirmed')->get();
        return view('admin.karya.index', compact('karyaList'));
    }

    // Menampilkan detail karya
    public function show($id)
    {
        // Mengambil karya beserta user dan gambar terkait
        $karya = Karya::with(['user', 'images'])->findOrFail($id);
        return view('admin.karya.show', compact('karya'));
    }

    // Menghapus karya
    public function destroy($id)
    {
        $karya = Karya::findOrFail($id);

        // Hapus gambar terkait sebelum menghapus karya
        foreach ($karya->images as $image) {
            Storage::delete($image->image_path); // Hapus file gambar dari storage
            $image->delete(); // Hapus record gambar dari database
        }

        $karya->delete();
        return redirect()->route('admin.karya.index')->with('success', 'Karya berhasil dihapus.');
    }
}
