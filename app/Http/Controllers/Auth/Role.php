<?php

namespace App\Http\Middleware;

use Illuminate\Support\Facades\Auth;    // needed to retrieve logged in user
use Closure;

class Role
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
        $user = Auth::user();

        // if no user is logged in, redirect to login page
        if($user == null) {
            return redirect('/login');
        }

        // user logged in, is not an admin
        if ($user->isAdmin() == false) {
            return redirect('/error')->with('error', 'Unauthorized page! you are not the admin');
        }

        return $next($request);
    }
}
