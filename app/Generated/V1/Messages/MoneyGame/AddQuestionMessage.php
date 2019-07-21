<?php

namespace App\Generated\V1\Messages\MoneyGame;

use Kamicloud\StubApi\Concerns\ValueHelper;
use Kamicloud\StubApi\Http\Messages\Message;
use Kamicloud\StubApi\Utils\Constants;

class AddQuestionMessage extends Message
{
    use ValueHelper;

    protected $question;
    protected $answer;

    /**
     * @return string
     */
    public function getQuestion()
    {
        return $this->question;
    }

    /**
     * @return string
     */
    public function getAnswer()
    {
        return $this->answer;
    }

    public function requestRules()
    {
        return [
            ['question', 'question', 'bail|string', Constants::STRING, null],
            ['answer', 'answer', 'bail|string', Constants::STRING, null],
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
