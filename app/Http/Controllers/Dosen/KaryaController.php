<?php

namespace App\Http\Controllers\Dosen;

use App\Http\Controllers\Controller;
use App\Models\Karya;
use Illuminate\Support\Facades\Auth;

class KaryaController extends Controller
{
    public function index()
    {
        $karyaList = Karya::where('user_id', Auth::id())->get();
        return view('dosen.karya.index', compact('karyaList'));
    }

    public function show($id)
    {
        $karya = Karya::findOrFail($id);
        return view('dosen.karya.show', compact('karya'));
    }
}
