<?php

namespace App\Generated\V1\Messages\Article;

use YetAnotherGenerator\Utils\Constants;
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
            ['articles', 'articles', ArticleModel::class, Constants::IS_MODEL | Constants::IS_ARRAY],
        ];
    }

    public function setResponse($articles)
    {
        $this->articles = $articles;
    }

}
