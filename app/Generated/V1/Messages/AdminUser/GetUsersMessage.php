<?php

namespace App\Generated\V1\Messages\AdminUser;

use Kamicloud\StubApi\Concerns\ValueHelper;
use Kamicloud\StubApi\Http\Messages\Message;
use Kamicloud\StubApi\Utils\Constants;

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
            ['strings', 'strings', 'bail|String', Constants::IS_ARRAY],
            ['ints', 'ints', 'bail|int', Constants::IS_ARRAY],
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
