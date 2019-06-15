<?php

namespace App\Http\Controllers;

use App\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index()
    {
        $galerias = Gallery::isActive()->latest()->paginate();

        return view('list-gallery', compact('galerias'));
    }

    public function show(Request $request, Gallery $galerium)
    {
        return view('singlegallery')->with(['galeria' => $galerium]);
    }
}
