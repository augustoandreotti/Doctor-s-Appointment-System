<?php

namespace App\Http\Middleware;

use Closure;

class AssistantMiddleware
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
        
        if ($request->user()->role != 'Assistant') {
            return abort(403, "Sorry, you are not eligible to access this page!");
        }

        return $next($request);
    }
}
