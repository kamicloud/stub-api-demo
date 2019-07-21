<?php

namespace App\Generated\Controllers\V1;

use App\Http\Services\V1\MoneyGameService;
use App\Generated\V1\Messages\MoneyGame\AddQuestionMessage;
use App\Http\Controllers\Controller;
use App\Generated\V1\Messages\MoneyGame\GetQuestionsMessage;
use DB;

class MoneyGameController extends Controller
{
    public $handler;

    public function __construct(MoneyGameService $handler)
    {
        $this->handler = $handler;
    }

    public function getQuestions(GetQuestionsMessage $message)
    {
        $message->validateInput();
        $this->handler->getQuestions($message);
        $message->validateOutput();
        return $message->getResponse();
    }

    public function addQuestion(AddQuestionMessage $message)
    {
        $message->validateInput();
        $this->handler->addQuestion($message);
        $message->validateOutput();
        return $message->getResponse();
    }

}
