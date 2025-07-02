<?php

namespace App\Http\Controllers;

use App\Models\Artikel;

class ArtikelController extends Controller
{
    public function index()
    {
        $artikels = Artikel::latest()->get(); // Ambil semua artikel, bisa juga pakai paginate()

        return view('lifestyle', compact('artikels'));
    }
}

