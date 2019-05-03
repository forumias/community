<?php

namespace App\Http\Middleware;

use Closure;

use Auth; //at the top

class Adminuser
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
		if (Auth::check() && Auth::user()->type == 2) {
			Auth::logout();
			return redirect('/admin/login');
		}
		return $next($request); 
	}
}
