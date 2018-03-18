<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page;
use TCG\Voyager\Models\Post;

class PublicPagesController extends Controller
{
    public function index()
    {
        $pages = Page::active()->get();
        $noticias = Post::latest()->take(4)->get();

        return view('welcome')->with([
            'pages' => $pages,
            'noticias' => $noticias,
            ]);
    }

    public function page($slug)
    {
        if (Page::where('slug', $slug)->active()->count() > 0) {
            $pages = Page::active()->get();
            $pagina = Page::where('slug', $slug)->first();
            return view('singlepage')->with([
                'pagina' => $pagina,
                'pages' => $pages,
                ]);
        }else{
            $pages = Page::active()->get();

            return redirect()->route('home');
        }
    }
}
