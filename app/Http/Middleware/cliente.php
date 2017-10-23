<?php

namespace frust\Http\Middleware;

use Closure;

class cliente
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

          if (strtoupper(\Auth::user()->us_tipo_usuario) === 'CLIENTE') {
            return $next($request);
          }else{
            abort(401);
          }

        }else{
          abort(401);
        }
    }
}
