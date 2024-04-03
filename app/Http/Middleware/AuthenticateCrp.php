<?php
namespace App\Http\Middleware;
use Illuminate\Auth\Middleware\Authenticate as Middleware;

class AuthenticateCrp extends Middleware
{
    protected function redirectTo($request)
    {
        if(!$request->expectsJson()) {
            return route('crp_login');
        }
    }
}