<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Pengajuan;
use App\Models\Karya;
use Illuminate\Http\Request;

class MahasiswaPengajuanController extends Controller
{
    // Menampilkan daftar pengajuan mahasiswa
    public function index()
    {
        $pengajuans = Pengajuan::where('user_id', auth()->id())->with('karya')->get();
        return view('mahasiswa.pengajuan.index', compact('pengajuans'));
    }

    // Form untuk membuat pengajuan karya
    public function create()
    {
        return view('mahasiswa.pengajuan.create');
    }

    // Menyimpan pengajuan baru
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'kategori' => 'required|string|max:100',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $path = null;
        if ($request->hasFile('gambar')) {
            $path = $request->file('gambar')->store('karya_images', 'public');
        }

        // Membuat karya baru
        $karya = Karya::create([
            'user_id' => auth()->id(),
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'kategori' => $request->kategori,
            'gambar' => $path,
            'is_confirmed' => false,
        ]);

        // Membuat pengajuan baru
        Pengajuan::create([
            'user_id' => auth()->id(),
            'karya_id' => $karya->id,
            'status' => 'pending',
        ]);

        return redirect()->route('mahasiswa.pengajuan.index')->with('success', 'Pengajuan karya berhasil diajukan.');
    }
}
