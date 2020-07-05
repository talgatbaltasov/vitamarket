<?php

namespace App\Http\Middleware;

use Closure;

class FirstModal
{
    public function handle($request, Closure $next)
    {
        if(!$request->session()->has('firstmodal')) {
            $request->session()->put('firstmodal', 'first');
        } elseif($request->session()->get('firstmodal')=='first'){
            $request->session()->put('firstmodal', 'exist');
        }

        return $next($request);
    }
}
