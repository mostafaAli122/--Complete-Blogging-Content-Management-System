<?php

namespace App\Http\Middleware;
use Auth;
use Session;
use Closure;

class admin
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
        if(!Auth::user()->admin)
        {
            Session:flash('success','You Don\'t Have Permissions To Perform This Action.');
            return redirect()->back();
        }
        return $next($request);
    }
}
