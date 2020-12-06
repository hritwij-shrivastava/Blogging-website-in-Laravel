<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class test
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
        $id = $request->url();
        
		if($id == 'http://localhost/blog/hritwij-shrivastava'){
			return response()->view('/htmlFiles/profile');
        }
        else{
            return redirect($id);
        }
       		
        return $next($request);
    }
}
