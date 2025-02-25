<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckOrderReferer
{
    public function handle(Request $request, Closure $next)
    {
        $referer = $request->headers->get('referer');
        $allowedDomains = [
            config('app.url'),
            'https://natalnayakarta.store'
        ];
        
        $isValidReferer = false;
        foreach ($allowedDomains as $domain) {
            if (str_starts_with($referer, $domain)) {
                $isValidReferer = true;
                break;
            }
        }

        if (!$isValidReferer) {
            return response()->json([
                'error' => 'Unauthorized access'
            ], 403);
        }

        return $next($request);
    }
} 