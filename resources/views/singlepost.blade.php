@extends('layouts.master')

@section('title', ' - ' . $noticia->title)

@section('content')
    <div class="blog-posts-area">

        <!-- Single Featured Post -->
        <div class="single-blog-post featured-post single-post">
            <div class="post-thumb">
                <img src="{{ Voyager::image($noticia->image) }}" alt="">
            </div>
            <div class="post-data">
                <a class="post-title">
                    <h6>{{ $noticia->title }}</h6>
                </a>
                <div class="post-meta">
                    <p class="post-author">Por <a>{{ $noticia->authorId->name }}</a></p>
                    <div class="text-justify">
                        {!! $noticia->body !!}
                    </div>
                    <div class="newspaper-post-like d-flex align-items-center justify-content-between">
                        {{--<!-- Tags -->
                        <div class="newspaper-tags d-flex">
                            <span>Tags:</span>
                            <ul class="d-flex">
                                <li><a href="#">finacial,</a></li>
                                <li><a href="#">politics,</a></li>
                                <li><a href="#">stock market</a></li>
                            </ul>
                        </div>--}}

                        {{--<!-- Post Like & Post Comment -->
                        <div class="d-flex align-items-center post-like--comments">
                            <a href="#" class="post-like"><img src="img/core-img/like.png" alt=""> <span>392</span></a>
                            <a href="#" class="post-comment"><img src="img/core-img/chat.png" alt=""> <span>10</span></a>
                        </div>--}}
                    </div>
                </div>
            </div>
        </div>

        <!-- About Author -->
        <div class="blog-post-author d-flex">
            <div class="author-thumbnail">
                <img src="{{ Voyager::image($noticia->authorId->avatar) }}" alt="">
            </div>
            <div class="author-info">
                <a class="author-name">{{ $noticia->authorId->name }}</a>
                <p>
                    Publicado em {{ $noticia->created_at->format('d/m/Y h:i') }}
                </p>
                <p>
                    Última atualização em {{ $noticia->updated_at->format('d/m/Y H:i') }}
                </p>
            </div>
        </div>

        <div class="pager d-flex align-items-center justify-content-between">

            <div class="prev">
                @if($previous)
                    <a href="{{ route('noticia', $previous->slug) }}" class="active"><i class="fa fa-angle-left"></i> Anterior</a>
                @endif
            </div>
            <div class="next">
                @if($next)
                    <a href="{{ route('noticia', $next->slug) }}">Próximo <i class="fa fa-angle-right"></i></a>
                @endif
            </div>

        </div>

        {{--<!-- Comment Area Start -->
        <div class="comment_area clearfix">
            <h5 class="title">3 Comments</h5>

            <ol>
                <!-- Single Comment Area -->
                <li class="single_comment_area">
                    <!-- Comment Content -->
                    <div class="comment-content d-flex">
                        <!-- Comment Author -->
                        <div class="comment-author">
                            <img src="img/bg-img/30.jpg" alt="author">
                        </div>
                        <!-- Comment Meta -->
                        <div class="comment-meta">
                            <a href="#" class="post-author">Christian Williams</a>
                            <a href="#" class="post-date">April 15, 2018</a>
                            <p>Donec turpis erat, scelerisque id euismod sit amet, fermentum vel dolor. Nulla facilisi. Sed pellen tesque lectus et accu msan aliquam. Fusce lobortis cursus quam, id mattis sapien.</p>
                        </div>
                    </div>
                    <ol class="children">
                        <li class="single_comment_area">
                            <!-- Comment Content -->
                            <div class="comment-content d-flex">
                                <!-- Comment Author -->
                                <div class="comment-author">
                                    <img src="img/bg-img/31.jpg" alt="author">
                                </div>
                                <!-- Comment Meta -->
                                <div class="comment-meta">
                                    <a href="#" class="post-author">Sandy Doe</a>
                                    <a href="#" class="post-date">April 15, 2018</a>
                                    <p>Donec turpis erat, scelerisque id euismod sit amet, fermentum vel dolor. Nulla facilisi. Sed pellen tesque lectus et accu msan aliquam. Fusce lobortis cursus quam, id mattis sapien.</p>
                                </div>
                            </div>
                        </li>
                    </ol>
                </li>

                <!-- Single Comment Area -->
                <li class="single_comment_area">
                    <!-- Comment Content -->
                    <div class="comment-content d-flex">
                        <!-- Comment Author -->
                        <div class="comment-author">
                            <img src="img/bg-img/32.jpg" alt="author">
                        </div>
                        <!-- Comment Meta -->
                        <div class="comment-meta">
                            <a href="#" class="post-author">Christian Williams</a>
                            <a href="#" class="post-date">April 15, 2018</a>
                            <p>Donec turpis erat, scelerisque id euismod sit amet, fermentum vel dolor. Nulla facilisi. Sed pellen tesque lectus et accu msan aliquam. Fusce lobortis cursus quam, id mattis sapien.</p>
                        </div>
                    </div>
                </li>
            </ol>
        </div>

        <div class="post-a-comment-area section-padding-80-0">
            <h4>Leave a comment</h4>

            <!-- Reply Form -->
            <div class="contact-form-area">
                <form action="#" method="post">
                    <div class="row">
                        <div class="col-12 col-lg-6">
                            <input type="text" class="form-control" id="name" placeholder="Name*">
                        </div>
                        <div class="col-12 col-lg-6">
                            <input type="email" class="form-control" id="email" placeholder="Email*">
                        </div>
                        <div class="col-12">
                            <input type="text" class="form-control" id="subject" placeholder="Website">
                        </div>
                        <div class="col-12">
                            <textarea name="message" class="form-control" id="message" cols="30" rows="10" placeholder="Message"></textarea>
                        </div>
                        <div class="col-12 text-center">
                            <button class="btn newspaper-btn mt-30 w-100" type="submit">Submit Comment</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>--}}
    </div>
@endsection