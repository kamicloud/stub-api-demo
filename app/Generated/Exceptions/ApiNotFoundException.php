<?php

namespace App\Generated\Exceptions;

use YetAnotherGenerator\Exceptions\BaseException;

class ApiNotFoundException extends BaseException
{
    public function __construct($message = null)
    {
        parent::__construct($message, ErrorCode::API_NOT_FOUND);
    }

}
