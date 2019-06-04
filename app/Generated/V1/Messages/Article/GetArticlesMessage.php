<?php

namespace App\Generated\V1\Messages\Article;

use Kamicloud\StubApi\Concerns\ValueHelper;
use Kamicloud\StubApi\Http\Messages\Message;
use Kamicloud\StubApi\Utils\Constants;
use App\Generated\V1\DTOs\ArticleDTO;

class GetArticlesMessage extends Message
{
    use ValueHelper;

    protected $ymd;
    protected $articles;

    /**
     * @return \Illuminate\Support\Carbon
     */
    public function getYmd()
    {
        return $this->ymd;
    }

    public function requestRules()
    {
        return [
            ['ymd', 'ymd', 'bail|date_format:Y-m-d', Constants::DATE, 'Y-m-d'],
        ];
    }

    public function responseRules()
    {
        return [
            ['articles', 'articles', ArticleDTO::class, Constants::MODEL | Constants::ARRAY, null],
        ];
    }

    public function setResponse($articles)
    {
        $this->articles = $articles;
    }

}
