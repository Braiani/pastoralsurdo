@extends('layouts.master')

@push('title')
    {{ $galeria->titulo }}
@endpush

@push('css')
    <style>
        .btn:focus, .btn:active, button:focus, button:active {
            outline: none !important;
            box-shadow: none !important;
        }

        #image-gallery .modal-footer {
            display: block;
        }

        .thumb {
            margin-top: 15px;
            margin-bottom: 15px;
        }
    </style>
@endpush

@section('content')
    <div class="blog-posts-area">
        <div class="single-blog-post featured-post single-post">
            <div class="post-data">
                <div class="post-title">
                    <h6>{{ $galeria->titulo }}</h6>
                </div>
                <div class="post-meta">
                    <div class="text-justify">
                        {!! $galeria->descricao !!}
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach(json_decode($galeria->imagens) as $imagem)
                <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                    <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
                       data-image="{{ Voyager::image($imagem) }}"
                       data-target="#image-gallery">
                        <img class="img-thumbnail"
                             src="{{ Voyager::image($imagem) }}"
                             alt="{{ $galeria->titulo }}">
                    </a>
                </div>
            @endforeach
        </div>
    </div>
    <div class="modal fade" id="image-gallery" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="image-gallery-title"></h4>
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img id="image-gallery-image" class="img-responsive col-md-12" src="">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary float-left" id="show-previous-image"><i class="fa fa-arrow-left"></i>
                    </button>

                    <button type="button" id="show-next-image" class="btn btn-secondary float-right"><i class="fa fa-arrow-right"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script src="{{ asset('js/plugins/gallery.js') }}"></script>
@endpush