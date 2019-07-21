<?php

namespace App\Generated\V1\DTOs;

use Kamicloud\StubApi\Concerns\ValueHelper;
use Kamicloud\StubApi\DTOs\DTO;
use Kamicloud\StubApi\Utils\Constants;

class MoneyGameQuestionDTO extends DTO
{
    use ValueHelper;

    protected $id;
    protected $question;
    protected $answer;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

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

    public function setId($id)
    {
        $this->id = $id;
    }

    public function setQuestion($question)
    {
        $this->question = $question;
    }

    public function setAnswer($answer)
    {
        $this->answer = $answer;
    }

    public function getAttributeMap()
    {
        return [
            ['id', 'id', 'bail|integer', Constants::INTEGER, null],
            ['question', 'question', 'bail|string', Constants::STRING, null],
            ['answer', 'answer', 'bail|string', Constants::STRING, null],
        ];
    }

}
