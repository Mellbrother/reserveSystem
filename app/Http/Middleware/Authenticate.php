<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
/*リダイレクト先を条件分けして変えたい*/
        if (! $request->expectsJson()) {
            return route('customer.login');
        }


    /*    if ($request->expectsJson()) {
            return response()->json(['error' => 'Unauthenticated.'], 401);
          }
        if (in_array('customer', $exception->guards(), true)) {
            return redirect()->guest(route('customer.login'));
          }
        if (in_array('clerk', $exception->guards(), true)) {
            return redirect()->guest(route('clerk.login'));
          }
        if (in_array('admin', $exception->guards(), true)) {
            return redirect()->guest(route('admin.login'));
          }
          */

    }
}
