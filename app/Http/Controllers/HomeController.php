<?php

namespace App\Http\Controllers;

use App\Models\Karya;
use App\Models\Project; // Import the Project model
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $karyas = Karya::where('status', 'confirmed')
            ->orderBy('created_at', 'desc')
            ->limit(3)
            ->get();

        return view('home', compact('karyas'));
    }
    public function show($id)
    {
        $karya = Karya::with('images')->findOrFail($id);
        return response()->json($karya);
    }
    public function like($id)
    {
        $karya = Karya::findOrFail($id);
        $karya->increment('likes'); // Menambah jumlah like sebesar 1
        $karya->save();

        return response()->json(['likes' => $karya->likes]); // Kembalikan jumlah like terbaru
    }
}
