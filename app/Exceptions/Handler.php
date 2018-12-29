<?php

namespace App\Exceptions;

use Exception;
use YetAnotherGenerator\Handler as ExceptionHandler;
use YetAnotherGenerator\BaseException;

class Handler extends ExceptionHandler
{
    protected $dontReport = [
        BaseException::class
    ];

    protected $dontFlash = [
        'password',
        'password_confirmation',
    ];

    public function report(Exception $exception)
    {
        parent::report($exception);
    }

    public function render($request, Exception $exception)
    {
        if (starts_with($request->getRequestUri(), '/admin')) {
            return response()->view('app');
        }
        return parent::render($request, $exception);
    }
}
