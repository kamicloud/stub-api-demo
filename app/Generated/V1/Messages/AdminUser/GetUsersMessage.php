<?php

namespace App\Generated\V1\Messages\AdminUser;

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
            ['strings', 'strings', false, true, 'bail|required|String', false, false, false],
            ['ints', 'ints', false, true, 'bail|required|int', false, false, false],
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
