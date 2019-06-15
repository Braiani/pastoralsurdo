@foreach($files as $file)
    <div class="single-blog-post small-featured-post d-flex">
        <div class="post-data">
            <p class="post-catagory">{{ $file->titulo }}</p>
            <div class="post-meta">
                <div class="post-title">
                    <h6>{{ $file->descricao }}</h6>
                    <h6 class="post-catagory">Links:</h6>
                    @foreach(json_decode($file->path) as $path)
                        <a href="{{ Storage::disk(config('voyager.storage.disk'))->url($path->download_link) }}" class="post-title">
                            <h6>{{ $path->original_name }}</h6>
                        </a>
                    @endforeach

                </div>
                <p class="post-date"><span>Adicionado em:</span> <span>{{ $file->created_at->format('d/m/Y') }}</span></p>
            </div>
        </div>
    </div>
@endforeach