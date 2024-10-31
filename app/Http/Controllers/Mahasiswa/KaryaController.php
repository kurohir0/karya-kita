<?php

namespace App\Http\Controllers\Mahasiswa;

use App\Http\Controllers\Controller;
use App\Models\Karya;
use Illuminate\Support\Facades\Auth;

class KaryaController extends Controller
{
    public function index()
    {
        // Menampilkan karya milik mahasiswa dengan status 'confirmed'
        $karyaList = Karya::where('user_id', Auth::id())->where('status', 'confirmed')->get();
        return view('mahasiswa.karya.index', compact('karyaList'));
    }

    public function show($id)
    {
        // Mencari karya berdasarkan ID dan user yang sedang login
        $karya = Karya::where('id', $id)->where('user_id', Auth::id())->firstOrFail();
        return view('mahasiswa.karya.show', compact('karya'));
    }
}
