<?php

namespace App\Generated\V1\Messages\MoneyGame;

use Kamicloud\StubApi\Concerns\ValueHelper;
use App\Generated\V1\DTOs\MoneyGameQuestionDTO;
use Kamicloud\StubApi\Http\Messages\Message;
use Kamicloud\StubApi\Utils\Constants;

class GetQuestionsMessage extends Message
{
    use ValueHelper;

    protected $page;
    protected $questions;

    /**
     * @return int
     */
    public function getPage()
    {
        return $this->page;
    }

    public function requestRules()
    {
        return [
            ['page', 'page', 'bail|integer', Constants::INTEGER, null],
        ];
    }

    public function responseRules()
    {
        return [
            ['questions', 'questions', MoneyGameQuestionDTO::class, Constants::MODEL | Constants::ARRAY, null],
        ];
    }

    public function setResponse($questions)
    {
        $this->questions = $questions;
    }

}
