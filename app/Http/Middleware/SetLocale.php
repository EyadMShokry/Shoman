<?php

namespace App\Http\Middleware;

use Closure;

class SetLocale
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if ($request->lang) {
            if (in_array(strtolower($request->lang), config('app.languages'))) {
                session()->put('locale', $request->lang);
            } else {
                session()->put('locale', 'en');
            }
        }
        if (session()->has('locale')) {
            app()->setLocale(session('locale'));
        }
        $request->route()->forgetParameter('lang');
        return $next($request);
    }
}
