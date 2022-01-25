<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\User;
use Illuminate\Http\Request;

class accountVerificationMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $user = User::where('email',$request->email)->first();
       if($user){
           if($user->is_active == 1){
               return $next($request);
           }else{
               return redirect()->back()->with('message','Verify Your Account');
           }
       }else{
           return redirect()->back()->with('message','User Not Found');
       }

    }
}
