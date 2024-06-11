<?php

namespace App\Http\Middleware;

use Illuminate\Http\Request;
use Illuminate\Contracts\Auth\Guard;
use Session;
use Closure;

class Administrador
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */

         protected $auth;
    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
    }


    public function handle(Request $request, Closure $next)
    {


        $email = $request->session()->get('email');

         if($this->auth->user()->idrol == '2'){
             return $next($request);

        } else {
            return redirect('home');
        }
    }
}