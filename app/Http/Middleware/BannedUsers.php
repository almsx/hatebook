<?php

namespace App\Http\Middleware;

use Closure;

class BannedUsers
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
        if(\Auth::user()->banned == 0) {
            return $next($request);
        }else{

        session()->flash('message', 'Chinga tu madre, estas baneado');
        session()->flash('message-type', 'danger');


        return redirect('/home');
        }
    }
}
