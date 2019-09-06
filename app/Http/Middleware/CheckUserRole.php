<?php

namespace App\Http\Middleware;

use Closure;
use App\User;
use App\Role\RoleChecker;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class CheckUserRole
{
    
    protected $roleChecker;

    public function _construct(RoleChecker $roleChecker){
        $this->roleChecker = $roleChecker;
    }
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $role)
    {
        $user = Auth::guard()->user();

        Log::info("User retrieved" . $user);


        if( !$this->roleChecker->check($user, $role)){
            throw new AuthorizationException("You do not have permission to view
            this page");
        }
        return $next($request);
    }
}
