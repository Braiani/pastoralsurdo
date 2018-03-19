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
<div class="section landing-section">
    <div class="container">
        <div class="row">
            <div class="col-md-8 ml-auto mr-auto">
                <h2 class="text-center">Entre em contato</h2>
                <form class="contact-form" method="POST" action="{{ url('/contato') }}">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-md-6">
                            <label>Nome</label>
                            <div class="input-group @if($errors->has('nome')) has-danger @endif">
                                <span class="input-group-addon">
                                    <i class="nc-icon nc-single-02"></i>
                                </span>
                                <input type="text" class="form-control" name="nome" placeholder="Nome" value="{{old('nome')}}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label>E-mail</label>
                            <div class="input-group @if($errors->has('email')) has-danger @endif">
                                <span class="input-group-addon">
                                    <i class="nc-icon nc-email-85"></i>
                                </span>
                                <input type="text" class="form-control" name="email" placeholder="E-mail" value="{{old('email')}}">
                            </div>
                        </div>
                    </div>
                    <label>Mensagem</label>
                    <textarea class="form-control" rows="4" name="mensagem" placeholder="Mensagem...">{{old('mensagem')}}</textarea>
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