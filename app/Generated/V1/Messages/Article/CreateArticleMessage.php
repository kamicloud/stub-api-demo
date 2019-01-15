<?php

namespace App\Generated\V1\Messages\Article;

use YetAnotherGenerator\BaseMessage;
use App\Generated\V1\Models\ArticleModel;
use YetAnotherGenerator\ValueHelper;

class CreateArticleMessage extends BaseMessage
{
    use ValueHelper;

    protected $title;
    protected $content;
    protected $article;

    public function getTitle()
    {
        return $this->title;
    }

    public function getContent()
    {
        return $this->content;
    }

    public function requestRules()
    {
        return [
            ['title', 'title', false, false, 'bail|required|String', false, false, false],
            ['content', 'content', false, false, 'bail|required|String', false, false, false],
        ];
    }

    public function responseRules()
    {
        return [
            ['article', 'article', true, false, ArticleModel::class, false, false, false],
        ];
    }

    public function setResponse($article)
    {
        $this->article = $article;
    }

}
