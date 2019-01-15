<?php

namespace Tests\Generated\V1\Article;

use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;

class GetArticlesTest extends TestCase
{
    use DatabaseTransactions;

    public function testCase0()
    {
        $response = $this->post('/api/V1/Article/GetArticles', [
        ]);
        $actual = $response->getContent();
        $expect = <<<JSON
{
  "status": 0.0,
  "message": "success",
  "data": {
    "articles": [
      {
        "id": "*",
        "title": "nf1s4836nntQxE2oWWvk",
        "content": null,
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
      },
      {
        "id": "*",
        "title": "TCIq9wE9dnKjWWZKmt1f",
        "content": null,
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
      },
      {
        "id": "*",
        "title": "WkDdgXcST6JwsDmrkIoG",
        "content": null,
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
      },
      {
        "id": "*",
        "title": "p8vdbGrcsdJ158Wps7Xx",
        "content": null,
        "user": {
          "id": "*",
          "name": "Ttdnts",
          "avatar": "https://avatars3.githubusercontent.com/u/25639206?s\\u003d88\\u0026v\\u003d4"
        },
        "status": 1.0,
        "commentsCount": 1.0,
        "favorite": null,
        "hot": null,
        "createdAt": "2018-12-30 16:11:33"
      },
      {
        "id": "*",
        "title": "RZft11L10uvARiwPq6HU",
        "content": null,
        "user": {
          "id": "*",
          "name": "Ttdnts",
          "avatar": "https://avatars3.githubusercontent.com/u/25639206?s\\u003d88\\u0026v\\u003d4"
        },
        "status": 1.0,
        "commentsCount": 1.0,
        "favorite": null,
        "hot": null,
        "createdAt": "2018-12-30 16:11:33"
      },
      {
        "id": "*",
        "title": "yFyslAelSBZkQr7MpJ1i",
        "content": null,
        "user": {
          "id": "*",
          "name": "Ttdnts",
          "avatar": "https://avatars3.githubusercontent.com/u/25639206?s\\u003d88\\u0026v\\u003d4"
        },
        "status": 1.0,
        "commentsCount": 1.0,
        "favorite": null,
        "hot": null,
        "createdAt": "2018-12-30 16:11:33"
      },
      {
        "id": "*",
        "title": "NzrP0r1TcmgAt11zSTBH",
        "content": null,
        "user": {
          "id": "*",
          "name": "Ttdnts",
          "avatar": "https://avatars3.githubusercontent.com/u/25639206?s\\u003d88\\u0026v\\u003d4"
        },
        "status": 1.0,
        "commentsCount": 1.0,
        "favorite": null,
        "hot": null,
        "createdAt": "2018-12-30 16:11:33"
      },
      {
        "id": "*",
        "title": "fOOe6QN7dzNVMVOvyftT",
        "content": null,
        "user": {
          "id": "*",
          "name": "Ttdnts",
          "avatar": "https://avatars3.githubusercontent.com/u/25639206?s\\u003d88\\u0026v\\u003d4"
        },
        "status": 1.0,
        "commentsCount": 1.0,
        "favorite": null,
        "hot": null,
        "createdAt": "2018-12-30 16:11:34"
      },
      {
        "id": "*",
        "title": "768NvQM1hlUJ4Zbq3743",
        "content": null,
        "user": {
          "id": "*",
          "name": "Ttdnts",
          "avatar": "https://avatars3.githubusercontent.com/u/25639206?s\\u003d88\\u0026v\\u003d4"
        },
        "status": 1.0,
        "commentsCount": 1.0,
        "favorite": null,
        "hot": null,
        "createdAt": "2018-12-30 16:11:34"
      },
      {
        "id": "*",
        "title": "9YTxCcdsfHbmpk8XL2ma",
        "content": null,
        "user": {
          "id": "*",
          "name": "Ttdnts",
          "avatar": "https://avatars3.githubusercontent.com/u/25639206?s\\u003d88\\u0026v\\u003d4"
        },
        "status": 1.0,
        "commentsCount": 1.0,
        "favorite": null,
        "hot": null,
        "createdAt": "2018-12-30 16:11:34"
      },
      {
        "id": "*",
        "title": "Ae1mS44XLLdD6c3jtijX",
        "content": null,
        "user": {
          "id": "*",
          "name": "Ttdnts",
          "avatar": "https://avatars3.githubusercontent.com/u/25639206?s\\u003d88\\u0026v\\u003d4"
        },
        "status": 1.0,
        "commentsCount": 1.0,
        "favorite": null,
        "hot": null,
        "createdAt": "2018-12-30 16:11:35"
      },
      {
        "id": "*",
        "title": "MoLBu9mqVS7lxhY7HCDK",
        "content": null,
        "user": {
          "id": "*",
          "name": "Ttdnts",
          "avatar": "https://avatars3.githubusercontent.com/u/25639206?s\\u003d88\\u0026v\\u003d4"
        },
        "status": 1.0,
        "commentsCount": 1.0,
        "favorite": null,
        "hot": null,
        "createdAt": "2018-12-30 16:11:35"
      },
      {
        "id": "*",
        "title": "KPEQgq2p6tAoodQdeTTC",
        "content": null,
        "user": {
          "id": "*",
          "name": "Ttdnts",
          "avatar": "https://avatars3.githubusercontent.com/u/25639206?s\\u003d88\\u0026v\\u003d4"
        },
        "status": 1.0,
        "commentsCount": 1.0,
        "favorite": null,
        "hot": null,
        "createdAt": "2018-12-30 16:11:35"
      },
      {
        "id": "*",
        "title": "RAIz6p52xSXvrtxzdrOt",
        "content": null,
        "user": {
          "id": "*",
          "name": "Ttdnts",
          "avatar": "https://avatars3.githubusercontent.com/u/25639206?s\\u003d88\\u0026v\\u003d4"
        },
        "status": 1.0,
        "commentsCount": 1.0,
        "favorite": null,
        "hot": null,
        "createdAt": "2018-12-30 16:11:36"
      },
      {
        "id": "*",
        "title": "Db0Zfi7u41z9LWDyksFZ",
        "content": null,
        "user": {
          "id": "*",
          "name": "Ttdnts",
          "avatar": "https://avatars3.githubusercontent.com/u/25639206?s\\u003d88\\u0026v\\u003d4"
        },
        "status": 1.0,
        "commentsCount": 1.0,
        "favorite": null,
        "hot": null,
        "createdAt": "2018-12-30 16:11:36"
      },
      {
        "id": "*",
        "title": "cFdkdp6rAP133wWKEg29",
        "content": null,
        "user": {
          "id": "*",
          "name": "Ttdnts",
          "avatar": "https://avatars3.githubusercontent.com/u/25639206?s\\u003d88\\u0026v\\u003d4"
        },
        "status": 1.0,
        "commentsCount": 1.0,
        "favorite": null,
        "hot": null,
        "createdAt": "2018-12-30 16:11:36"
      },
      {
        "id": "*",
        "title": "wgFDnzhww4MJxQU0gu4i",
        "content": null,
        "user": {
          "id": "*",
          "name": "Ttdnts",
          "avatar": "https://avatars3.githubusercontent.com/u/25639206?s\\u003d88\\u0026v\\u003d4"
        },
        "status": 1.0,
        "commentsCount": 1.0,
        "favorite": null,
        "hot": null,
        "createdAt": "2018-12-30 16:11:37"
      },
      {
        "id": "*",
        "title": "DmVQtUmvuNKcNS6WOwid",
        "content": null,
        "user": {
          "id": "*",
          "name": "Ttdnts",
          "avatar": "https://avatars3.githubusercontent.com/u/25639206?s\\u003d88\\u0026v\\u003d4"
        },
        "status": 1.0,
        "commentsCount": 1.0,
        "favorite": null,
        "hot": null,
        "createdAt": "2018-12-30 16:11:37"
      },
      {
        "id": "*",
        "title": "tFxocYzAV4ueYMK5WrW8",
        "content": null,
        "user": {
          "id": "*",
          "name": "Ttdnts",
          "avatar": "https://avatars3.githubusercontent.com/u/25639206?s\\u003d88\\u0026v\\u003d4"
        },
        "status": 1.0,
        "commentsCount": 1.0,
        "favorite": null,
        "hot": null,
        "createdAt": "2018-12-30 16:11:37"
      },
      {
        "id": "*",
        "title": "NSg9P0FO5eQ1gkFW6d68",
        "content": null,
        "user": {
          "id": "*",
          "name": "Ttdnts",
          "avatar": "https://avatars3.githubusercontent.com/u/25639206?s\\u003d88\\u0026v\\u003d4"
        },
        "status": 1.0,
        "commentsCount": 1.0,
        "favorite": null,
        "hot": null,
        "createdAt": "2018-12-30 16:11:38"
      }
    ]
  }
}
JSON;
        $expect = json_encode(json_decode($expect));
        $this->assertJsonStringEqualsJsonString($expect, $actual);
    }

}
