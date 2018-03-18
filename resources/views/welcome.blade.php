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
        <div class="section @if(($loop->index % 2) != 0) section-dark @endif">
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
@endsection