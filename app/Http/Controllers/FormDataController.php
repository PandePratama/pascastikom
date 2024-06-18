<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FormData;
use App\Models\Media;

class FormDataController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'file' => 'required|file',
            'text_data' => 'required|string',
            'url' => 'required|url',
        ]);

        // Handle file upload
        if ($request->hasFile('file')) {
            $filePath = $request->file('file')->store('uploads', 'public');
        }

        // Save to database
        FormData::create([
            'name' => $validatedData['name'],
            'file_path' => $filePath,
            'text_data' => $validatedData['text_data'],
            'url' => $validatedData['url']
        ]);

        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'file' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    
        $filePath = $request->file('file')->store('uploads', 'public');
    
        Media::create([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'file_path' => $filePath,
        ]);

        return redirect()->route('dashboard')->with('success', 'Data has been saved successfully.');
    }
}
