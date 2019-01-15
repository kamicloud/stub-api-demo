<?php

namespace Tests\Generated\V1\Article;

use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;

class CreateArticleTest extends TestCase
{
    use DatabaseTransactions;

    public function testCase0()
    {
        $response = $this->post('/api/V1/Article/CreateArticle', [
            'title' => 'xxxxxxxxxxx',
            'content' => 'yyyyyyyyyyyyy',
        ]);
        $actual = $response->getContent();
        $expect = <<<JSON
{
  "status": 0.0,
  "message": "success",
  "data": {
    "article": {
      "id": "*",
      "title": "xxxxxxxxxxx",
      "content": "yyyyyyyyyyyyy",
      "user": {
        "id": "*",
        "name": "Ttdnts",
        "avatar": "https://avatars3.githubusercontent.com/u/25639206?s\\u003d88\\u0026v\\u003d4"
      },
      "status": 0.0,
      "commentsCount": null,
      "favorite": null,
      "hot": null,
      "createdAt": "2018-12-30 16:19:28"
    }
  }
}
JSON;
        $expect = json_encode(json_decode($expect));
        $this->assertJsonStringEqualsJsonString($expect, $actual);
    }

}
