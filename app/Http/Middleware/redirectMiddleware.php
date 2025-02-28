<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class redirectMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $role): Response
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        switch ($role) {
            case session('role'):
                return $next($request);
                break;
            
            case 'admine':
                return redirect()->route('admine.dashbord');
                break;

            case 'proprietaire':
                return redirect()->route('owner.dashbord');
                break;
            
            default:
                return redirect()->route('home');
                break;
        }
    }
}
