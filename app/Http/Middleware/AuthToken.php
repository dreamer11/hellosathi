<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;

class AuthToken
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

        $user=User::where('auth_token',$request->get('token'))->first();

        if(!empty($user)){

            return $next($request);
        }

        return response(['message'=>'You need to login']);

    }
}
