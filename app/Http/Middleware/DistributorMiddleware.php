<?php

namespace App\Http\Middleware;

use Closure;

class DistributorMiddleware
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
        if(Auth::user()->role == 'distributor')
        {
            return $next($request);
        }
        else
        {
            return redirect('/home')->with('status','Akses ditolak ke dashboard');
        }
    }
}
