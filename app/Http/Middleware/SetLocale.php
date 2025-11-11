<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpFoundation\Response;

class SetLocale
{
    /**
     * Handle an incoming request.
     *
     * @param \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response) $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $arAllowLang = ['am', 'en'];

        if ($request->has('lang')) {

            $lang = strtolower($request->get('lang'));

            if (Session::get('locale') != $lang) {
                Session::put('locale', (in_array($lang, $arAllowLang))
                    ? $lang
                    : env('APP_FALLBACK_LOCALE', 'en'));
            }
        }

        App::setLocale(Session::get('locale'));

        return $next($request);
    }
}
