<?php

namespace Tests\Generated\V1\Article;

use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;

class GetArticleTest extends TestCase
{
    use DatabaseTransactions;

    public function testCase0()
    {
        $response = $this->post('/api/V1/Article/GetArticle', [
            'id' => '1',
        ]);
        $actual = $response->getContent();
        $expect = <<<JSON
{
  "status": 0.0,
  "message": "success",
  "data": {
    "article": {
      "id": "*",
      "title": "nf1s4836nntQxE2oWWvk",
      "content": "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",
      "user": {
        "id": "*",
        "name": "Ttdnts",
        "avatar": "https://avatars3.githubusercontent.com/u/25639206?s\\u003d88\\u0026v\\u003d4"
      },
      "status": 1.0,
      "commentsCount": 1.0,
      "favorite": null,
      "hot": null,
      "createdAt": "2018-12-30 16:11:32"
    }
  }
}
JSON;
        $expect = json_encode(json_decode($expect));
        $this->assertJsonStringEqualsJsonString($expect, $actual);
    }

}
