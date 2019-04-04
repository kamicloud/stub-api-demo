<?php

namespace App\Generated\Exceptions;

use YetAnotherGenerator\Exceptions\BaseException;

class CustomErrorMessageException extends BaseException
{
    public function __construct($message = null)
    {
        parent::__construct($message, ErrorCode::CUSTOM_ERROR_MESSAGE);
    }

}
