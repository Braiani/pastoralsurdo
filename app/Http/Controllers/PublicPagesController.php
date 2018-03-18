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
        }else{
            Contato::create($request->all());
            toastr()->success('Mensagem recebida com sucesso', 'Sucesso');
        }
        return redirect()->route('contato');
    }
}
