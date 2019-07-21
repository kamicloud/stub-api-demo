<?php

namespace App\Http\Services\V1;

use App\Generated\V1\DTOs\MoneyGameQuestionDTO;
use App\Generated\V1\Messages\MoneyGame\GetQuestionsMessage;
use App\Generated\V1\Messages\MoneyGame\AddQuestionMessage;
use App\Models\MoneyGameQuestion;

class MoneyGameService
{
    public function getQuestions(GetQuestionsMessage $message)
    {
        $page = $message->getPage();

        $questions = MoneyGameQuestion::forPage($page, 10)->get();

        $message->setResponse(MoneyGameQuestionDTO::initFromEloquents($questions));
    }
    public function addQuestion(AddQuestionMessage $message)
    {
        $request = $message->getRequest();
        $question = $message->getQuestion();
        $answer = $message->getAnswer();

        MoneyGameQuestion::create([
            'question' => $question,
            'answer' => $answer,
            'ip' => $request->getClientIp(),
        ]);
    }
}
