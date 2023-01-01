<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class MemberAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $path =$request->path();
        
        preg_match('!\d+!',$path,$id);
        if(session()->has('member')){
            if ($id[0] == session()->get('member')['id']) {
                return $next($request);
            }else{
                return redirect('errors.404');
            }
        }else{
            return redirect()->route('memberlogin');
        }
    }
}
