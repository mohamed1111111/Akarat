<?php

namespace App\Http\Middleware;
use Illuminate\support\facades\Auth;
use Closure;

class IsUserAdmin
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
      if(Auth::user()->admin !=1){
        return redirect('home');
      }
        return $next($request);
    }
}
