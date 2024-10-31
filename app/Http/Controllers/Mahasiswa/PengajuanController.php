<?php

namespace App\Http\Controllers\Mahasiswa;

use App\Http\Controllers\Controller;
use App\Http\Requests\PengajuanRequest;
use App\Models\Pengajuan;
use App\Models\Karya;
use App\Models\KaryaImage;
use Illuminate\Support\Facades\Auth;

class PengajuanController extends Controller
{
    // Index
    public function index()
    {
        $pengajuanList = Pengajuan::where('user_id', Auth::id())
            ->where('status', 'pending') // Hanya ambil yang belum dikonfirmasi
            ->get();

        return view('mahasiswa.pengajuan.index', compact('pengajuanList'));
    }

    // Create
    public function create()
    {
        return view('mahasiswa.pengajuan.create');
    }

    // Store
    public function store(PengajuanRequest $request)
    {
        // Buat karya baru
        $karya = Karya::create([
            'user_id' => Auth::id(),
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'kategori' => $request->kategori,
            'status' => 'pending', // Status awal
        ]);

        // Simpan gambar
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                KaryaImage::create([
                    'karya_id' => $karya->id,
                    'image_path' => $image->store('karya', 'public'),
                ]);
            }
        }

        // Simpan pengajuan terkait karya
        Pengajuan::create([
            'user_id' => Auth::id(),
            'karya_id' => $karya->id,
            'status' => 'pending',
        ]);

        return redirect()->route('mahasiswa.pengajuan.index')->with('success', 'Pengajuan berhasil dibuat.');
    }


    // Show
    public function show($id)
    {
        $pengajuan = Pengajuan::findOrFail($id);
        return view('mahasiswa.pengajuan.show', compact('pengajuan'));
    }

    // Destroy
    public function destroy($id)
    {
        $pengajuan = Pengajuan::findOrFail($id);
        $pengajuan->delete();
        return redirect()->route('mahasiswa.pengajuan.index')->with('success', 'Pengajuan berhasil dihapus.');
    }
}
