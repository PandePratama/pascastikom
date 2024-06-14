<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FormData;

class DashboardController extends Controller
{
    public function index()
    {
        // Ambil semua data dari tabel form_data
        $data = FormData::all();
        return view('admin.dashboard', ['data' => $data]);
    }
}

