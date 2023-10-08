<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response {
        //return $next($request);
        $user = Auth::guard('web')->user();
        if ($user->role_id == 1) { 
            return $next($request);
        }
        else {
            
            abort(403, 'Bạn không có quyền truy cập vui lòng liên hệ Ngô Bảo Real để được cấp quyền');
        }
    }
}
