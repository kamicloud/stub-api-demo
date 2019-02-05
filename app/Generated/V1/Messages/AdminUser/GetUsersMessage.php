<?php

namespace App\Generated\V1\Messages\AdminUser;

use YetAnotherGenerator\Concerns\ValueHelper;
use YetAnotherGenerator\Utils\Constants;
use YetAnotherGenerator\Http\Messages\Message;

class GetUsersMessage extends Message
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
