<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array<int, class-string<Throwable>>
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     *
     * @return void
     */
    public function register()
    {
        // $this->reportable(function (Throwable $e) {
        //     $this->renderable(function (InvalidOrderException $e, $request) {
        //         return response()->view('errors.invalid-order', [], 500);
        //     });
        // });
        $this->renderable(function (\Osiset\ShopifyApp\Exceptions\MissingShopDomainException $e, $request) {
            // dd($e);
            if($e instanceof \Osiset\ShopifyApp\Exceptions\MissingShopDomainException) {
                return response()->view('login', [], 500);
            }
        });
    }
}
