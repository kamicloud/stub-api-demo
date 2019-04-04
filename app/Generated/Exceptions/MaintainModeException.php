<?php

namespace App\Generated\Exceptions;

use YetAnotherGenerator\Exceptions\BaseException;

class MaintainModeException extends BaseException
{
    public function __construct($message = null)
    {
        parent::__construct($message, ErrorCode::MAINTAIN_MODE);
    }

}
