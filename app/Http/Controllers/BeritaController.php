<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;

class BeritaController extends Controller
{
    public function index()
    {
        $beritas = Berita::latest()->paginate(5); // Untuk halaman /berita
    
        return view('berita.index', compact('beritas'));
    }
    
    public function home()
    {
        $beritaTrending = Berita::latest()->take(3)->get(); // Ambil 3 berita tren
        return view('public.web-berita', compact('beritaTrending'));
    }
}    
