<?php

namespace App\Http\Middleware;

use Closure;

class setLang
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
        app()->setLocale($request->session()->get('lang'));

        return $next($request);
    }
}
