<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AccountStatusMonitor
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
        if (is_null(auth()->user()->account_verified_at)) {
            return redirect()->route('user.account.status.index');
        }

        return $next($request);
    }
}
