<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Moderator
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(
            Auth::user()->email=='siam.ctg@gmail.com' ||
            Auth::user()->email=='sankarbala232@gmail.com' ||
            Auth::user()->email=='bengal.consultancy.bd@gmail.com'
            ){
            return $next($request);
        }else{
            abort(401);
        }
    }
}
