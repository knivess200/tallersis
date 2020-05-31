<?php

namespace App\Http\Middleware;

use Closure, Auth;

class IsAdmin
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
        if(Auth::user()->role=="1"):
            return $next($request);
           // return redirect('/admin');
        else:
            if(Auth::user()->role=="2"):
                return redirect('/us');
            else:
                if(Auth::user()->role=="3"):
                return redirect('/usua');
                endif;
            endif;
            
        endif;
    }
}
