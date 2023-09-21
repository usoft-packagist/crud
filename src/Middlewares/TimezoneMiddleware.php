<?php

namespace Usoft\Crud\Middlewares;

use Carbon\Carbon;
use Closure;
use Illuminate\Http\Request;

class TimezoneMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if ($timezone = $request->header('Timezone', 'Asia/Tashkent')) {
            date_default_timezone_set($timezone);
        }
        return $next($request);
    }
}
