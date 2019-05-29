<?php

namespace App\Generated\V1\Messages\Article;

use Kamicloud\StubApi\Concerns\ValueHelper;
use Kamicloud\StubApi\Http\Messages\Message;
use Kamicloud\StubApi\Utils\Constants;
use App\Generated\V1\DTOs\ArticleCommentDTO;

class GetArticleCommentsMessage extends Message
{
    use ValueHelper;

    protected $articleId;
    protected $page;
    protected $comments;

    public function getArticleId()
    {
        return $this->articleId;
    }

    public function getPage()
    {
        return $this->page;
    }

    public function requestRules()
    {
        return [
            ['articleId', 'article_id', 'bail|Integer', null],
            ['page', 'page', 'bail|Integer', null],
        ];
    }

    public function responseRules()
    {
        return [
            ['comments', 'comments', ArticleCommentDTO::class, Constants::IS_ARRAY | Constants::IS_MODEL],
        ];
    }

    public function setResponse($comments)
    {
        $this->comments = $comments;
    }

}
