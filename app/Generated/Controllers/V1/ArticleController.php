<?php

namespace App\Generated\Controllers\V1;

use Illuminate\Contracts\Foundation\Application;
use App\Http\Services\V1\ArticleService;
use App\Generated\V1\Messages\Article\GetArticlesMessage;
use App\Http\Controllers\Controller;
use App\Generated\V1\Messages\Article\CreateArticleMessage;
use App\Generated\V1\Messages\Article\GetArticleMessage;
use App\Generated\V1\Messages\Article\GetArticleCommentsMessage;
use DB;

class ArticleController extends Controller
{
    protected $application;

    public function __construct(Application $application)
    {
        $this->application = $application;
        $this->application->singleton(GetArticleCommentsMessage::class);
        $this->application->singleton(CreateArticleMessage::class);
        $this->application->singleton(GetArticleMessage::class);
        $this->application->singleton(GetArticlesMessage::class);
    }

    public function getArticleComments(GetArticleCommentsMessage $message)
    {
        $message->validateInput();
        $this->application->call(ArticleService::class, [], 'getArticleComments');
        $message->validateOutput();
        return $message->getResponse();
    }

    public function createArticle(CreateArticleMessage $message)
    {
        return DB::transaction(function () use ($message) {
            $message->validateInput();
            $this->application->call(ArticleService::class, [], 'createArticle');
            $message->validateOutput();
            return $message->getResponse();
        });
    }

    public function getArticle(GetArticleMessage $message)
    {
        $message->validateInput();
        $this->application->call(ArticleService::class, [], 'getArticle');
        $message->validateOutput();
        return $message->getResponse();
    }

    public function getArticles(GetArticlesMessage $message)
    {
        $message->validateInput();
        $this->application->call(ArticleService::class, [], 'getArticles');
        $message->validateOutput();
        return $message->getResponse();
    }

}
