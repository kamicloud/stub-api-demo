<?php

namespace App\Generated\V1\Messages\Article;

use YetAnotherGenerator\Concerns\ValueHelper;
use YetAnotherGenerator\Utils\Constants;
use App\Generated\V1\Models\ArticleModel;
use YetAnotherGenerator\Http\Messages\Message;

class GetArticleMessage extends Message
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
            ['id', 'id', 'bail|required|Integer', Constants::IS_OPTIONAL],
        ];
    }

    public function responseRules()
    {
        return [
            ['article', 'article', ArticleModel::class, Constants::IS_MODEL],
        ];
    }

    public function setResponse($article)
    {
        $this->article = $article;
    }

}
