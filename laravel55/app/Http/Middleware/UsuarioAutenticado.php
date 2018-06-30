<?php


namespace App\Http\Middleware;

use Closure;

class UsuarioAutenticado
{


	public function handle($request, Closure $next)
    {
        
        if(!session("cliente"))
        {
        	return redirect("/login");
        }

        return $next($request);
    }

}