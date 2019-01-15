<?php

namespace App\Managers;

use App\Models\Article;
use App\Models\User;

class ArticleManager
{
    public static function getArticles()
    {
        return Article::get();
    }

    public static function getArticle($id)
    {
        return Article::findOrFail($id);
    }

    public static function createArticle(User $user, string $title, string $content)
    {
        $article = $user->articles()->create([
            'title' => $title,
            'status' => 0,
        ]);
        /** @var Article $article */
        $article->articleContent()->create([
            'content' => $content,
        ]);

        return $article;
    }
}
