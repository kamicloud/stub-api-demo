<?php

namespace App\Generated\V1\Messages\Article;

use YetAnotherGenerator\Utils\Constants;
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
            ['title', 'title', 'bail|required|String', Constants::IS_OPTIONAL],
            ['content', 'content', 'bail|required|String', Constants::IS_OPTIONAL],
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
