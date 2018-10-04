<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page;
use TCG\Voyager\Models\Post;
use Validator;
use App\Contato;

class PublicPagesController extends Controller
{
    public function index()
    {
        $pages = Page::active()->get();
        $noticias = Post::latest()->take(6)->get();

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

    public function news($slug)
    {
        if (Post::where('slug', $slug)->where('status', 'PUBLISHED')->count() > 0) {
            $pages = Page::active()->get();
            $noticia = Post::where('slug', $slug)->first();
            return view('singlepage')->with([
                'pagina' => $noticia,
                'pages' => $pages,
                ]);
        }else{
            toastr()->error('Página não encontrada! Direcionamos a página inicial!', 'Erro!');
            return redirect()->route('home');
        }
    }

    public function getContato()
    {
        $pages = Page::active()->get();   
        return view('contato')->with(['pages' => $pages]);
    }

    public function postContato(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'nome' => 'required|min:3',
            'email' => 'required|email',
            'mensagem' => 'required|min:5'
        ]);

        if ($validation->fails()) {
            toastr()->error('Por favor, verifique os campos da mensagem!', 'Erro!');
            return redirect()->back()->withErrors($validation)->withInput();
        }else{
            Contato::create($request->all());
            toastr()->success('Mensagem recebida com sucesso', 'Sucesso');
        }
        return redirect()->route('contato');
    }
}
