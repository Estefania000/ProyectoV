<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class isAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Verificar si el usuario no está autenticado
        if (!Auth::check()) {
            // Redirigir al login con un mensaje de error si no está autenticado
            return redirect()->route('login')->withErrors(['error' => 'Debe iniciar sesión para acceder.']);
        }

        // Permitir la continuación de la solicitud si el usuario está autenticado
        return $next($request);
    }
}
