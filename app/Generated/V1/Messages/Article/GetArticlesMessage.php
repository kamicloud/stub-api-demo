<?php

namespace App\Generated\V1\Messages\Article;

use YetAnotherGenerator\BaseMessage;
use App\Generated\V1\Models\ArticleModel;
use YetAnotherGenerator\ValueHelper;

class GetArticlesMessage extends BaseMessage
{
    use ValueHelper;

    protected $articles;

    public function requestRules()
    {
        return [
        ];
    }

    public function responseRules()
    {
        return [
            ['articles', 'articles', true, true, ArticleModel::class, false, false, false],
        ];
    }

    public function setResponse($articles)
    {
        $this->articles = $articles;
    }

}
