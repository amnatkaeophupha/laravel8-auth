<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @param  string  $role
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, $role)
    {

       if (!Auth::check() || Auth::user()->role !== $role) {

            Auth::logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();
            // return redirect('auth')->with('fail', 'Role not assigned!');
            abort(403,"Unauthorized action.");

        }

       return $next($request);
    }
}
