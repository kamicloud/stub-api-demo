<?php

namespace App\Generated\Controllers\V1;

use App\Http\Services\V1\ArticleService;
use App\Generated\V1\Messages\Article\GetArticlesMessage;
use App\Http\Controllers\Controller;
use App\Generated\V1\Messages\Article\CreateArticleMessage;
use App\Generated\V1\Messages\Article\GetArticleMessage;
use DB;

class ArticleController extends Controller
{
    public $service;

    public function __construct(ArticleService $service)
    {
        $this->service = $service;
    }

    public function createArticle(CreateArticleMessage $message)
    {
        $message->validateInput();
        $this->service->createArticle($message);
        $message->validateOutput();
        return $message->getResponse();
    }

    public function getArticle(GetArticleMessage $message)
    {
        $message->validateInput();
        $this->service->getArticle($message);
        $message->validateOutput();
        return $message->getResponse();
    }

    public function getArticles(GetArticlesMessage $message)
    {
        $message->validateInput();
        $this->service->getArticles($message);
        $message->validateOutput();
        return $message->getResponse();
    }

}
