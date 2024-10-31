<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Karya;
use App\Models\KaryaImage;
use App\Models\Pengajuan;
use Illuminate\Http\Request;

class PengajuanController extends Controller
{
    // Menampilkan daftar pengajuan
    public function index()
    {
        $pengajuanList = Pengajuan::with('karya')->where('status', 'pending')->get();
        return view('admin.pengajuan.index', compact('pengajuanList'));
    }

    // Menampilkan detail pengajuan
    public function show($id)
    {
        $pengajuan = Pengajuan::with(['user', 'karya'])->findOrFail($id);
        return view('admin.pengajuan.show', compact('pengajuan'));
    }

    // Mengonfirmasi pengajuan
    public function confirm($id)
    {
        $pengajuan = Pengajuan::findOrFail($id);

        // Ubah status menjadi terkonfirmasi
        if ($pengajuan->status !== 'confirmed') {
            $pengajuan->status = 'confirmed';
            $pengajuan->save();

            // Pindahkan ke tabel karya
            $karya = Karya::create([
                'user_id' => $pengajuan->user_id,
                'judul' => $pengajuan->karya->judul,
                'deskripsi' => $pengajuan->karya->deskripsi,
                'kategori' => $pengajuan->karya->kategori,
                'status' => 'confirmed',
            ]);

            // Simpan setiap gambar terkait ke dalam tabel karya_images
            foreach ($pengajuan->karya->images as $image) {
                KaryaImage::create([
                    'karya_id' => $karya->id,
                    'image_path' => $image->image_path,
                ]);
            }

            // Hapus pengajuan setelah terkonfirmasi
            $pengajuan->delete();
        }

        return redirect()->route('admin.pengajuan.index')->with('success', 'Pengajuan telah dikonfirmasi dan dipindahkan ke karya.');
    }

    // Menghapus pengajuan
    public function destroy($id)
    {
        $pengajuan = Pengajuan::findOrFail($id);
        $pengajuan->delete();
        return redirect()->route('admin.pengajuan.index')->with('success', 'Pengajuan berhasil dihapus.');
    }
}
