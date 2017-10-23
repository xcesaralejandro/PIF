<?php

namespace frust\Http\Middleware;

use Closure;

class administrador
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
      if (!\Auth::guest()) {

        if (strtoupper(\Auth::user()->us_tipo_usuario) === 'ADMINISTRADOR') {
          return $next($request);
        }else{
          abort(401);
        }

      }else{
        abort(401);
      }
    }
}
