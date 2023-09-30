<?php

namespace App\Http\Middleware;
use Auth;
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
        $user = Auth::guard('admin')->user();
        if ($user && $user->role_id == 1) { 
            return $next($request);
        }
        else {
            $request->session()->put('prevurl',url()->current());
            return redirect(url('dasboard/login'))
                ->with('thongbao','Bạn cần đăng nhập với vai trò admin');
        }
    }
}