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
<div class="section" id="carousel">
    <div class="container">
        <div class="row">
            <div class="container">
                <div class="tim-title text-center">
                    <h2>Últimas notícias</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 ml-auto mr-auto">
                <div class="card page-carousel">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            @foreach ($noticias as $noticia)
                            <li data-target="#carouselExampleIndicators" data-slide-to="{{ ($loop->index + 1) }}" class="@if($loop->first) active @endif"></li>
                            @endforeach
                        </ol>
                        <div class="carousel-inner" role="listbox">
                            @foreach ($noticias as $noticia)
                            <div class="carousel-item @if($loop->first) active @endif">
                                <img class="d-block img-fluid" src="{{ url('/storage/' . $noticia->image) }}" alt="{{ $noticia->excerpt }}">
                                <div class="carousel-caption d-none d-md-block">
                                    <p>{{ $noticia->excerpt }}</p>
                                </div>
                            </div>
                            @endforeach
                            <a class="left carousel-control carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                <span class="fa fa-angle-left"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                <span class="fa fa-angle-right"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
        {{--  <div class="section @if(($loop->index % 2) != 0) section-dark @endif">
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
        </div>      --}}
@endsection