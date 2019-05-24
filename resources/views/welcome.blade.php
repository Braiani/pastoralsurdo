@extends('layouts.master')

@section('content')
    @foreach($noticias as $noticia)
        <div class="col-12 col-md-4">
            <!-- Single Featured Post -->
            <div class="single-blog-post style-3">
                <div class="post-thumb">
                    <a href="{{ route('noticia', $noticia->slug) }}"><img src="{{ Voyager::image($noticia->image) }}" alt=""></a>
                </div>
                <div class="post-data">
                    <div class="post-meta">
                        <a href="{{ route('noticia', $noticia->slug) }}" class="post-title">
                            <h6>
                                {{ $noticia->title }}
                            </h6>
                            <p>
                                {{ $noticia->excerpt }}
                            </p>
                        </a>
                        {{--<!-- Post Like & Post Comment -->
                        <div class="d-flex align-items-center">
                            <a href="#" class="post-like"><img src="img/core-img/like.png" alt=""> <span>392</span></a>
                            <a href="#" class="post-comment"><img src="img/core-img/chat.png" alt=""> <span>10</span></a>
                        </div>--}}
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection

@section('content-above')
    <div class="row">
        <div class="pager d-flex align-items-center justify-content-between">

            <div class="prev">
                <a href="{{ route('noticias.all') }}" class=""><i class="fa fa-plus"></i> Mais notícias</a>
            </div>
        </div>
    </div>
@endsection