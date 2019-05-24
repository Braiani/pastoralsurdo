<?php

namespace App\Http\Controllers;

use App\Contato;
use App\Page;
use App\Post;
use Illuminate\Http\Request;
use Validator;

class PublicPagesController extends Controller
{
    public function index()
    {
        $noticias = Post::published()->latest()->take(4)->get();

        return view('welcome')->with([
            'noticias' => $noticias,
        ]);
    }

    public function page(Page $page)
    {
        if ($page->isActive()) {
            return view('singlepage')->with([
                'conteudo' => $page,
            ]);
        } else {
            toastr('A página solicitada não encontra-se disponível!', 'info');
            return redirect()->route('home');
        }
    }

    public function getContato()
    {
        return view('contato');
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
        } else {
            Contato::create($request->all());
            toastr()->success('Mensagem enviada com sucesso', 'Sucesso');
        }
        return redirect()->route('contato');
    }
}
