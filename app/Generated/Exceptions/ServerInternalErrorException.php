<?php

namespace App\Generated\Exceptions;

use YetAnotherGenerator\Exceptions\BaseException;

class ServerInternalErrorException extends BaseException
{
    public function __construct($message = null)
    {
        parent::__construct($message, ErrorCode::SERVER_INTERNAL_ERROR);
    }

}
