<?php namespace App\Http\Middleware;

use Closure;
use Auth;

class Teacher {

    public function handle($request, Closure $next)
    {

        if ( Auth::check() && Auth::user()->isTeacher() )
        {
            return $next($request);
        }

        return redirect('/');

    }

}
?>