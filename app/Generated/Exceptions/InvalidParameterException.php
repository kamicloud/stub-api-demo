<?php

namespace App\Generated\Exceptions;

use YetAnotherGenerator\BaseException;

class InvalidParameterException extends BaseException
{
    public function __construct($message = null)
    {
        parent::__construct($message, ErrorCode::INVALID_PARAMETER);
    }

}
