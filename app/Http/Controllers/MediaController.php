<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FormData;

class MediaController extends Controller
{
    public function media()
    {
        $mediaItems = FormData::orderBy('created_at', 'desc')->take(9)->get();
        return view('media', compact('mediaItems'));
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
}