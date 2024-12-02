<?php
 
namespace App\Http\Middleware;
 
use Closure;
use Illuminate\Http\Request;
 
class RoleMiddleware
{
    public function handle(Request $request, Closure $next, $role)
    {
        // Verifica si el usuario está autenticado
        if (!auth()->check()) {
            return response()->json(['message' => 'Unauthorized'], 401);
        }
 
     
        if (auth()->user()->role === 'admin') {
            return $next($request);
        }
        if (auth()->user()->role === 'student') {
            return $next($request);
        }
 
        // Verifica el rol del usuario para los demás roles
        if (auth()->user()->role !== $role) {
            return response()->json(['message' => 'Unauthorized'], 401);
        }
 
        return $next($request); // Si todo está correcto
    }
}