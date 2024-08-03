<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengumuman;

class PengumumanController extends Controller
{
    // Method untuk menampilkan form pengumuman
    public function create()
    {
        return view('admin.update_pengumuman');
    }

    // Method untuk menyimpan pengumuman ke database
    public function store(Request $request)
    {
        $request->validate([
            'text_data' => 'required|string',
            'url' => 'required|url',
        ]);

        Pengumuman::create([
            'text_data' => $request->text_data,
            'url' => $request->url,
        ]);

        return redirect('/pengumuman');
    }

    // Method untuk menampilkan pengumuman di halaman admin
    public function indexAdmin()
    {
        $pengumuman = Pengumuman::all();
        return view('admin.pengumuman', compact('pengumuman'));
    }

    // Method untuk menampilkan pengumuman di halaman user
    public function indexUser()
    {
        $pengumuman = Pengumuman::all();
        return view('tampil_pengumuman', compact('pengumuman'));
    }
    
    public function destroy($id)
    {
        // Temukan pengumuman berdasarkan ID
        $pengumuman = Pengumuman::findOrFail($id);

        // Hapus pengumuman
        $pengumuman->delete();

        // Redirect kembali dengan pesan sukses
        return redirect('/pengumuman')->with('success', 'Pengumuman berhasil dihapus.');
    }
}
