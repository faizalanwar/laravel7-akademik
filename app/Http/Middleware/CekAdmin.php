<?php

namespace App\Http\Middleware;
use Auth;
use Closure;

class CekAdmin
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
        $user = \App\User::where('email', $request->email)->first();
        if(Auth::user()->status == 'Administrator') {
            return $next($request);
        }
        return redirect()->to('/forbidden');
       
    
       
    }
}
