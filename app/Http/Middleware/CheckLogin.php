<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use Auth;

class CheckLogin
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
        if (Auth::check() && Auth::user()->isAdmin == 1 ) {
                return $next($request);
            //dd(Auth::user());
            //$user_admin=User::where('id',Auth::user()->id)->get()->first();
            //dd($user_admin);
        }else{
            return redirect()->route('login')->with(['msg' => 'Email không phải là admin', 'status' => 'danger']);
        }

    }
}
