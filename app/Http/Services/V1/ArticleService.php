<?php

namespace App\Http\Services\V1;

use App\Generated\V1\Messages\Article\CreateArticleMessage;
use App\Generated\V1\Messages\Article\GetArticleMessage;
use App\Generated\V1\Messages\Article\GetArticlesMessage;
use App\Generated\V1\Models\ArticleModel;
use App\Managers\ArticleManager;
use App\Models\Article;
use Auth;

class ArticleService
{
    public static function getArticles(GetArticlesMessage $message)
    {
        $articles = ArticleManager::getArticles();

        $articles->load([
            'user',
        ])->loadCount([
            'comments',
        ]);

        $message->setResponse(ArticleModel::initFromEloquents($articles));
    }

    public static function getArticle(GetArticleMessage $message)
    {
        $id = $message->getId();

        $article = ArticleManager::getArticle($id);
        /** @var Article $article */

        $article->load([
            'user',
            'articleContent',
        ]);

        $article->comments_count = $article->comments()->count();

        $message->setResponse(ArticleModel::initFromEloquent($article));
    }

    public static function createArticle(CreateArticleMessage $message)
    {
        $title = $message->getTitle();
        $content = $message->getContent();

        $user = Auth::user();

        $article = ArticleManager::createArticle($user, $title, $content);

        $article->load([
            'user',
            'articleContent',
        ]);

        $message->setResponse(ArticleModel::initFromEloquent($article));
    }
}
