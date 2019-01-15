<?php

namespace App\Generated\V1\Messages\Article;

use YetAnotherGenerator\BaseMessage;
use App\Generated\V1\Models\ArticleModel;
use YetAnotherGenerator\ValueHelper;

class GetArticleMessage extends BaseMessage
{
    use ValueHelper;

    protected $id;
    protected $article;

    public function getId()
    {
        return $this->id;
    }

    public function requestRules()
    {
        return [
            ['id', 'id', false, false, 'bail|required|Integer', false, false, false],
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
