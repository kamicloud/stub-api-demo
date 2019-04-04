<?php

namespace App\Generated\Exceptions;

use YetAnotherGenerator\Exceptions\BaseException;

class AuthFailedException extends BaseException
{
    public function __construct($message = null)
    {
        parent::__construct($message, ErrorCode::AUTH_FAILED);
    }

}
