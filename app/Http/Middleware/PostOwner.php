<?php

namespace App\Http\Middleware;

use Closure;

class PostOwner
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
        //@TODO model binding con el user 
        dd(\Auth::user());
        dd($post);
        return $next($request);
        //Flashear un mensaje
    }
}
