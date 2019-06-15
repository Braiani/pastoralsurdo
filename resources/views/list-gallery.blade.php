@extends('layouts.master')

@push('title')
    Galeria
@endpush

@push('css')
    <style>
        .single-blog-post.featured-post.gallery-list {
            border-bottom: 2px solid red;
            padding-top: 30px;
        }

        .single-blog-post.featured-post.gallery-list:first-child {
            padding-top: 0;
        }

        .single-blog-post.featured-post.gallery-list:last-child {
            padding-bottom: 0;
            border: none;
        }

        .single-blog-post.featured-post.gallery-list .post-data {
            padding-bottom: 0;
        }
    </style>
@endpush

@section('content')
    @if($galerias->isEmpty())
        <div class="blog-posts-area">
            <div class="single-blog-post featured-post mb-30">
                <div class="post-data">
                    <div class="post-title">
                        <h6>Não há nenhuma galeria disponível no momento!</h6>
                    </div>
                    <a href="{{ route('home') }}" class="post-author"><i class="fa fa-home"></i> Voltar para o início!</a>
                </div>
            </div>
        </div>
    @endif

    <div class="blog-posts-area">
        @foreach($galerias as $galeria)
            <div class="single-blog-post featured-post gallery-list mb-30">
                <div class="post-thumb">
                    <a href="{{ route('galeria.show', $galeria->slug) }}">
                        <img src="{{ Voyager::image(json_decode($galeria->imagens)[0]) }}" alt="">
                    </a>
                </div>
                <div class="post-data">
                    <a href="{{ route('galeria.show', $galeria->slug) }}" class="post-title">
                        <h6>{{ $galeria->titulo }}</h6>
                    </a>
                </div>
            </div>
        @endforeach
    </div>
    <div class="mb-3">
        {{ $galerias->appends(Request::except('page'))->links() }}
    </div>
@endsection