@extends('layouts.master')

@section('title', ' - ' . $pagina->title)

@section('page-header')
<div class="page-header" data-parallax="true" style="background-image: url('{{ url('/storage/' . $pagina->image)}}');">
    <div class="filter"></div>
    <div class="container">
        <div class="motto text-center">
            <h1>{{ $pagina->title }}</h1>
            <h3>{{ $pagina->excerpt }}</h3>
            <br />
            {{--  <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" class="btn btn-outline-neutral btn-round"><i class="fa fa-play"></i>Watch video</a>
            <button type="button" class="btn btn-outline-neutral btn-round">Download</button>  --}}
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-8 ml-auto mr-auto">
                <h2 class="title text-center">{{ $pagina->title }}</h2>
                <h5 class="description">
                    {!! $pagina->body !!}
                </h5>
                <br>
            </div>
        </div>
    </div>
</div>
@endsection