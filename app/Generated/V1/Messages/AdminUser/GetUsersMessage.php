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

    /**
     * @return string[]
     */
    public function getStrings()
    {
        return $this->strings;
    }

    /**
     * @return int[]
     */
    public function getInts()
    {
        return $this->ints;
    }

    public function requestRules()
    {
        return [
            ['strings', 'strings', 'bail|string', Constants::ARRAY, null],
            ['ints', 'ints', 'bail|integer', Constants::ARRAY, null],
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
