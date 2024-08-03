<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FormData;
use App\Models\Media;

class MediaController extends Controller
{
    public function showMedia()
    {
        $data = FormData::latest()->take(9)->get();
        return view('media', compact('data'));
    }

    public function showAllMedia()
    {
        $data = FormData::latest()->paginate(20); // Mengambil semua media dengan paginasi
        return view('mediaall', compact('data'));
    }

    public function showLessMedia()
    {
        $data = FormData::latest()->take(9)->get(); // Mengambil media yang lebih sedikit
        return view('mediaall', compact('data'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $imagePath = $request->file('image')->store('images', 'public');

        FormData::create([
            'title' => $request->title,
            'description' => $request->description,
            'image_path' => $imagePath
        ]);

        return redirect()->route('media')->with('success', 'Media uploaded successfully.');
    }

    public function destroy($id)
    {
        $item = FormData::findOrFail($id);
        $item->delete();

        return redirect()->route('dashboard')->with('success', 'Data berhasil dihapus.');
    }

    public function index()
    {
        $data = Media::latest()->take(9)->get();
        return view('media.index', compact('data'));
    }

    public function showAll()
    {
        $data = Media::paginate(12); // Atur jumlah item per halaman sesuai kebutuhan
        return view('media.all', compact('data'));
    }
}
