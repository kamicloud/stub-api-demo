<?php

namespace Tests\Generated\V1\User;

use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;

class CreateUserTest extends TestCase
{
    use DatabaseTransactions;

    public function testCase0()
    {
        $response = $this->post('/api/V1/User/CreateUser', [
            'email' => 'cy6@qq.com',
        ]);
        $actual = $response->getContent();
        $expect = <<<JSON
{
  "status": 10001.0,
  "message": "root \\u003e emails can not be null"
}
JSON;
        $expect = json_encode(json_decode($expect));
        $this->assertJsonStringEqualsJsonString($expect, $actual);
    }

}
