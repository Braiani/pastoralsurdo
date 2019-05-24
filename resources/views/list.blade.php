@extends('layouts.master')

@push('title')
    Ver todos
@endpush

@section('content')
    @if($noticias->isEmpty())
        <div class="blog-posts-area">
            <div class="single-blog-post featured-post mb-30">
                <div class="post-data">
                    <div class="post-title">
                        <h6>Não localizamos nenhuma notícia com os termos da pesquisa!</h6>
                    </div>
                    <a href="{{ route('home') }}" class="post-author"><i class="fa fa-home"></i> Voltar para o início!</a>
                </div>
            </div>
        </div>
    @endif
    @foreach($noticias as $noticia)
        <div class="blog-posts-area">
            <div class="single-blog-post featured-post mb-30">
                <div class="post-thumb">
                    <a href="{{ route('noticia', $noticia->slug) }}"><img src="{{ Voyager::image($noticia->image) }}" alt=""></a>
                </div>
                <div class="post-data">
                    <a href="{{ route('noticia', $noticia->slug) }}" class="post-title">
                        <h6>{{ $noticia->title }}</h6>
                    </a>
                    <div class="post-meta">
                        <p class="post-author">Por <a>{{ $noticia->authorId->name }}</a></p>
                        <p class="post-excerp">
                            <a href="{{ route('noticia', $noticia->slug) }}">{{ $noticia->excerpt }}</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    <div class="mb-3">
        {{ $noticias->appends(Request::except('page'))->links() }}
    </div>
@endsection