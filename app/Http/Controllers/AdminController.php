<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita; // kalau mau nampilin data berita

class AdminController extends Controller
{
    public function dashboard()
    {
        $beritas = Berita::latest()->paginate(10);
        return view('admin.dashboard', compact('beritas'));
    }
}
