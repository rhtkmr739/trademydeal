<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;
use URL;

class IsSellerActive
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
        if ($request->session()->has('userdetail') && (session('userdetail')[0]->userType == 4)) {
            
            $getSellerLoginStatus =  DB::select("call uspGetSellerLoginStatus(".Auth::user()->id.")");
            if($getSellerLoginStatus[0]->isActive == 'Y'){
                return $next($request);
            }else{
                return redirect('/restrict-account');
            }

            
         }
         return redirect('/')->withErrors(['error' => 'Access Denied, You are not a Seller currently.']);
    }
}
