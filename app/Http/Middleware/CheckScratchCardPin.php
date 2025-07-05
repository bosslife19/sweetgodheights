<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckScratchCardPin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next)
{
    if (!session('result_access_granted')) {
        return redirect()->route('student.enter_pin')->with('error', 'You must enter a valid PIN to access this page.');
    }

    return $next($request);
}

}
