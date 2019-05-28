<?php

namespace App\Generated\V1\Messages\Article;

use Kamicloud\StubApi\Concerns\ValueHelper;
use Kamicloud\StubApi\Http\Messages\Message;
use Kamicloud\StubApi\Utils\Constants;
use App\Generated\V1\Models\ArticleDTO;

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
            ['id', 'id', 'bail|Integer', null],
        ];
    }

    public function responseRules()
    {
        return [
            ['article', 'article', ArticleDTO::class, Constants::IS_MODEL],
        ];
    }

    public function setResponse($article)
    {
        $this->article = $article;
    }

}
