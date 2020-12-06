<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class authChecker
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $url = $request->url();
        echo $url;
        if(session()->has('id')){
            return redirect($url);
        }
        return redirect('login');
    }
}
