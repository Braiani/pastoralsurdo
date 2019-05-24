<?php

namespace App\Http\Middleware;

use App\Page;
use Closure;
use Illuminate\Support\Facades\View;

class SetActivePagesNavbar
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $pages = Page::active()->get();
        View::share('pages', $pages);
        return $next($request);
    }
}
