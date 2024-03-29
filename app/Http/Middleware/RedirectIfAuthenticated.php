<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if(Auth::guard($guard)->check() && Auth::user()->role->name == 'admin'){
            return redirect()->route('admin.dashboard');
        }
        elseif(Auth::guard($guard)->check() && Auth::user()->role->name == 'insurer'){
            return redirect()->route('insurer.dashboard');
        }
        elseif(Auth::guard($guard)->check() && Auth::user()->role->name == 'lawyer'){
            return redirect()->route('lawyer.dashboard');
        }
        elseif(Auth::guard($guard)->check() && Auth::user()->role->name == 'user'){
            return redirect()->route('user.dashboard');
        }
        else{
            return $next($request);
        }
        return $next($request);
    }
}
