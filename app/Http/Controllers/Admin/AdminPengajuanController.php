<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pengajuan;
use Illuminate\Http\Request;

class AdminPengajuanController extends Controller
{
    // Menampilkan semua pengajuan
    public function index()
    {
        $pengajuans = Pengajuan::with('karya', 'user')->get();
        return view('admin.pengajuan.index', compact('pengajuans'));
    }

    // Mengubah status pengajuan (terima/tolak)
    public function updateStatus(Request $request, $id)
    {
        $request->validate([
            'status' => 'required|in:accepted,rejected',
            'komentar_admin' => 'nullable|string',
        ]);

        $pengajuan = Pengajuan::findOrFail($id);
        $pengajuan->status = $request->status;
        $pengajuan->komentar_admin = $request->komentar_admin;
        $pengajuan->save();

        return redirect()->route('admin.pengajuan.index')->with('success', 'Status pengajuan berhasil diperbarui.');
    }

    // Menampilkan detail pengajuan
    public function show($id)
    {
        $pengajuan = Pengajuan::with('karya', 'user')->findOrFail($id);
        return view('admin.pengajuan.show', compact('pengajuan'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'kategori' => 'required|string|max:100',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Validasi gambar
        ]);

        $path = null;
        if ($request->hasFile('gambar')) {
            $path = $request->file('gambar')->store('karya_images', 'public'); // Menyimpan gambar ke penyimpanan publik
        }

        // Buat karya baru
        $karya = Karya::create([
            'user_id' => auth()->id(),
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'kategori' => $request->kategori,
            'gambar' => $path,
            'is_confirmed' => false,
        ]);

        // Buat pengajuan baru
        Pengajuan::create([
            'user_id' => auth()->id(),
            'karya_id' => $karya->id,
            'status' => 'pending',
        ]);

        return redirect()->route('pengajuan.index')->with('success', 'Pengajuan karya berhasil dibuat dan menunggu konfirmasi.');
    }
}
