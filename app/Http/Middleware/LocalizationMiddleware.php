<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class localizationMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */

    public function handle(Request $request, Closure $next){

        if (!empty(session()->get('locale'))) {
            App::setLocale(session()->get('locale'));
        }else{
            App::setLocale(App::getLocale());
        }
        return $next($request);
    }
}
