<?php

namespace App\Http\Services\V1;

use App\Generated\V1\Messages\Article\CreateArticleMessage;
use App\Generated\V1\Messages\Article\GetArticleMessage;
use App\Generated\V1\Messages\Article\GetArticlesMessage;
use App\Generated\V1\DTOs\ArticleDTO;
use App\Managers\ArticleManager;
use App\Generated\V1\Messages\Article\GetArticleCommentsMessage;
use Auth;

class ArticleService
{
    protected $articleManager;

    public function __construct(ArticleManager $articleManager)
    {
        $this->articleManager = $articleManager;
    }

    public function getArticles(GetArticlesMessage $message)
    {
        $articles = $this->articleManager->getArticles();

        $articles->load([
            'user',
        ])->loadCount([
            'comments',
        ]);

        $message->setResponse(ArticleDTO::initFromEloquents($articles));
    }

    public function getArticle(GetArticleMessage $message)
    {
        $id = $message->getId();

        $article = $this->articleManager->getArticle($id);

        $article->load([
            'user',
            'articleContent',
        ]);

        $articleDTO = ArticleDTO::initFromEloquent($article);

        $commentCount = $article->comments()->count();

        $articleDTO->setCommentsCount($commentCount);

        $message->setResponse($articleDTO);
    }

    public function createArticle(CreateArticleMessage $message)
    {
        $title = $message->getTitle();
        $content = $message->getContent();

        $user = Auth::user();

        $article = $this->articleManager->createArticle($user, $title, $content);

        $article->load([
            'user',
            'articleContent',
        ]);

        $message->setResponse(ArticleDTO::initFromEloquent($article));
    }

    public function getArticleComments(GetArticleCommentsMessage $message)
    {
    }

}
