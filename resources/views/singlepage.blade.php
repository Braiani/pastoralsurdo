@extends('layouts.master')

@section('title', ' - ' . $conteudo->title)

@section('content')
    <div class="blog-posts-area">

        <!-- Single Featured Post -->
        <div class="single-blog-post featured-post single-post">
            <div class="post-thumb">
                <img src="{{ Voyager::image($conteudo->image) }}" alt="">
            </div>
            <div class="post-data">
                <a class="post-title">
                    <h6>{{ $conteudo->title }}</h6>
                </a>
                <div class="post-meta">
                    <p class="post-author">Por <a>{{ $conteudo->authorId->name }}</a></p>
                    <div class="text-justify">
                        {!! $conteudo->body !!}
                    </div>
                </div>
            </div>
        </div>

        <!-- About Author -->
        <div class="blog-post-author d-flex mb-3">
            <div class="author-thumbnail">
                <img src="{{ Voyager::image($conteudo->authorId->avatar) }}" alt="">
            </div>
            <div class="author-info">
                <a class="author-name">{{ $conteudo->authorId->name }}</a>
                <p>
                    Publicado em {{ $conteudo->created_at->format('d/m/Y h:i') }}
                </p>
                <p>
                    Última atualização em {{ $conteudo->updated_at->format('d/m/Y H:i') }}
                </p>
            </div>
        </div>
    </div>
@endsection