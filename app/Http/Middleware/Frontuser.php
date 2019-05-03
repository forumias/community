<?php

namespace App\Http\Middleware;

use Closure;

use Auth; //at the top

class Frontuser
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
		if (Auth::check() && Auth::user()->type == 1) {
			return redirect('/admin/dashboard');
		}
		
		return $next($request);
	}
}
