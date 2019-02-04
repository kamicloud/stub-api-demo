<?php

namespace App\Generated\V1\Messages\AdminUser;

use YetAnotherGenerator\Utils\Constants;
use YetAnotherGenerator\BaseMessage;
use YetAnotherGenerator\ValueHelper;

class GetUsersMessage extends BaseMessage
{
    use ValueHelper;

    protected $strings;
    protected $ints;

    public function getStrings()
    {
        return $this->strings;
    }

    public function getInts()
    {
        return $this->ints;
    }

    public function requestRules()
    {
        return [
            ['strings', 'strings', 'bail|required|String', Constants::IS_OPTIONAL | Constants::IS_ARRAY],
            ['ints', 'ints', 'bail|required|int', Constants::IS_OPTIONAL | Constants::IS_ARRAY],
        ];
    }

    public function responseRules()
    {
        return [
        ];
    }

    public function setResponse()
    {
    }

}
