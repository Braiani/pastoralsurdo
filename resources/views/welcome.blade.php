@extends('layouts.master')

@section('page-header')
<div class="page-header" data-parallax="true" style="background-image: url('{{ url('/storage/' . setting('site.logo'))}}');">
    <div class="filter"></div>
    <div class="container">
        <div class="motto text-center">
            <h1>{{ setting('site.title') }}</h1>
            <h3>{{ setting('site.description') }}</h3>
            <br />
            {{--  <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" class="btn btn-outline-neutral btn-round"><i class="fa fa-play"></i>Watch video</a>
            <button type="button" class="btn btn-outline-neutral btn-round">Download</button>  --}}
        </div>
    </div>
</div>
@endsection

@section('content')
    @foreach ($noticias as $noticia)
        <div class="section">
            <div class="container text-center">
                <div class="row">
                    <div class="col-md-8 ml-auto mr-auto">
                        <h2 class="title">{{ $noticia->title }}</h2>
                        <h5 class="description">
                            {!! $noticia->excerpt !!}
                        </h5>
                        <br>
                    </div>
                </div>
            </div>
        </div>    
    @endforeach


    <div class="section landing-section">
        <div class="container">
            <div class="row">
                <div class="col-md-8 ml-auto mr-auto">
                    <h2 class="text-center">Entre em contato</h2>
                    <form class="contact-form">
                        <div class="row">
                            <div class="col-md-6">
                                <label>Nome</label>
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="nc-icon nc-single-02"></i>
                                    </span>
                                    <input type="text" class="form-control" placeholder="Nome">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label>E-mail</label>
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="nc-icon nc-email-85"></i>
                                    </span>
                                    <input type="text" class="form-control" placeholder="E-mail">
                                </div>
                            </div>
                        </div>
                        <label>Mensagem</label>
                        <textarea class="form-control" rows="4" placeholder="Mensagem..."></textarea>
                        <div class="row">
                            <div class="col-md-4 ml-auto mr-auto">
                                <button class="btn btn-danger btn-lg btn-fill">Enviar mensagem</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection