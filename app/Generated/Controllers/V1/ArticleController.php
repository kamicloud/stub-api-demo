<?php

namespace App\Generated\Controllers\V1;

use App\Http\Services\V1\ArticleService;
use App\Generated\V1\Messages\Article\GetArticlesMessage;
use App\Http\Controllers\Controller;
use App\Generated\V1\Messages\Article\CreateArticleMessage;
use App\Generated\V1\Messages\Article\GetArticleMessage;
use Illuminate\Http\Request;
use DB;

class ArticleController extends Controller
{
    public function createArticle(Request $request)
    {
        $message = new CreateArticleMessage($request);
        $message->validateInput();
        ArticleService::createArticle($message);
        $message->validateOutput();
        return $message->getResponse();
    }

    public function getArticle(Request $request)
    {
        $message = new GetArticleMessage($request);
        $message->validateInput();
        ArticleService::getArticle($message);
        $message->validateOutput();
        return $message->getResponse();
    }

    public function getArticles(Request $request)
    {
        $message = new GetArticlesMessage($request);
        $message->validateInput();
        ArticleService::getArticles($message);
        $message->validateOutput();
        return $message->getResponse();
    }

}
