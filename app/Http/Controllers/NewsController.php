<?php

namespace App\Http\Controllers;

use App\Page;
use App\Post;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function showAll()
    {

        $noticias = Post::published()->with('authorId')->paginate(2);
        return view('list', compact('noticias'));
    }

    public function single(Post $post)
    {
        if ($post->isPublished()) {
            return view('singlepost')->with([
                'noticia' => $post,
                'previous' => $post->previous,
                'next' => $post->next
            ]);
        } else {
            toastr()->error('Página não encontrada! Direcionamos a página inicial!', 'Erro!');
            return redirect()->route('home');
        }
    }

    public function search(Request $request)
    {
        $search = $request->texto;
        $noticias = Post::published()->with('authorId')->where(function ($query) use ($search) {
            $query->where('title', 'LIKE', "%{$search}%")->orWhere('excerpt', 'LIKE', "%{$search}%")->orWhere('body', 'LIKE', "%{$search}%");
        })->paginate(2);
        return view('list', compact( 'noticias'));
    }
}
