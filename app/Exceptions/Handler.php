<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;

//use Illuminate\Foundation\Auth\AuthenticatesUsers;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'password',
        'password_confirmation',
    ];

    /**
     * Report or log an exception.
     *
     * @param  \Throwable  $exception
     * @return void
     *
     * @throws \Exception
     */
    public function report(Throwable $exception)
    {
        parent::report($exception);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Throwable  $exception
     * @return \Symfony\Component\HttpFoundation\Response
     *
     * @throws \Throwable
     */
    public function render($request, Throwable $exception)
    {
        return parent::render($request, $exception);
    }

    /*認証前にアクセスしたときのリダイレクト先*/

  //  use AuthenticatesUsers;
/*
    protected function unauthenticated($request, AuthenticationException $exception)
    {
      if ($request->expectsJson()) {
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


      switch($exception->guards()[0]){
            case 'customer':
              return redirect()->guest(route('customer.login'));
              break;
            case 'clerk':
              return redirect()->guest(route('clerk.login'));
              break;
            case 'admin':
              return redirect()->guest(route('admin.login'));
              break;
      }
*/

}
