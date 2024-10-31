<?php

namespace App\Http\Controllers\Dosen;

use App\Http\Controllers\Controller;
use App\Http\Requests\PengajuanRequest;
use App\Models\Pengajuan;
use App\Models\Karya;
use Illuminate\Support\Facades\Auth;

class PengajuanController extends Controller
{
    // Index
    public function index()
    {
        $pengajuanList = Pengajuan::where('user_id', Auth::id())->get();
        return view('dosen.pengajuan.index', compact('pengajuanList'));
    }

    // Create
    public function create()
    {
        return view('dosen.pengajuan.create');
    }

    // Store
    public function store(PengajuanRequest $request)
    {
        $karya = Karya::create([
            'user_id' => Auth::id(),
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'kategori' => $request->kategori,
            'gambar' => $request->file('gambar')->store('karya', 'public'),
            'is_confirmed' => false,
        ]);

        Pengajuan::create([
            'user_id' => Auth::id(),
            'karya_id' => $karya->id,
            'status' => 'pending',
        ]);

        return redirect()->route('dosen.pengajuan.index')->with('success', 'Pengajuan berhasil dibuat.');
    }

    // Show
    public function show($id)
    {
        $pengajuan = Pengajuan::findOrFail($id);
        return view('dosen.pengajuan.show', compact('pengajuan'));
    }

    // Destroy
    public function destroy($id)
    {
        $pengajuan = Pengajuan::findOrFail($id);
        $pengajuan->delete();
        return redirect()->route('dosen.pengajuan.index')->with('success', 'Pengajuan berhasil dihapus.');
    }
}
