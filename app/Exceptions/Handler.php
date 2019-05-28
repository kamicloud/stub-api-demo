<?php

namespace App\Exceptions;

use Exception;
use Kamicloud\StubApi\Exceptions\Handler as ExceptionHandler;
use Kamicloud\StubApi\Exceptions\BaseException;
use Illuminate\Support\Str;

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
        if (Str::startsWith($request->getRequestUri(), '/admin')) {
            return response()->view('app');
        }
        return parent::render($request, $exception);
    }
}
