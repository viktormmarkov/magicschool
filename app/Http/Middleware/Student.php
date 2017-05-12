<?php namespace App\Http\Middleware;

use Closure;
use Auth;

class Student {

    public function handle($request, Closure $next)
    {

        if ( Auth::check() && Auth::user()->isStudent() )
        {
            return $next($request);
        }

        return redirect('/');

    }

}
?>