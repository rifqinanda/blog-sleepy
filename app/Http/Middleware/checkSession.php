<?php

namespace App\Http\Middleware;

use Closure;
use App\User;
use Auth;

class checkSession
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
        if (!empty(session()->get('user'))) {
            return $next($request);
        } else {
            return redirect('/admin/login');
        }
    }
}
