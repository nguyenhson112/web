<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use Illuminate\Http\Request;

class CheckLoginClient
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
        if (Auth::check()) {
            return $next($request);
            //dd(Auth::user());
            //$user_admin=User::where('id',Auth::user()->id)->get()->first();
            //dd($user_admin);

        } else {
            return redirect()->route('loginClient')->with(['msg' => 'Vui lòng đăng nhập', 'status' => 'danger']);
        }
    }
}
