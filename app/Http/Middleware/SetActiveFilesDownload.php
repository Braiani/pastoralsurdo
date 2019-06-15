<?php

namespace App\Http\Middleware;

use App\Archive;
use Closure;
use Illuminate\Support\Facades\View;

class SetActiveFilesDownload
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $files = Archive::active()->get();
        View::share('files', $files);
        return $next($request);
    }
}
