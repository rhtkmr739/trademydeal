<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use URL;

class IsAdminUser
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
        if ($request->session()->has('userdetail') && (session('userdetail')[0]->userType == 5)) {
            session()->put('currentUserRole', 'admin');
            return $next($request);
         }
         return redirect('/')->withErrors(['error' => 'Access Denied!']);
        
    }
}
