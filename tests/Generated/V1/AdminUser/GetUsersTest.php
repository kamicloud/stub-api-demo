<?php

namespace Tests\Generated\V1\AdminUser;

use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;

class GetUsersTest extends TestCase
{
    use DatabaseTransactions;

    public function testCase0()
    {
        $response = $this->post('/api/V1/AdminUser/GetUsers', [
            'Warning' => 'This is an error message for the log file',
            'User' => 'ed',
        ]);
        $actual = $response->getContent();
        $expect = <<<JSON
{
  "status": 10001.0,
  "message": "root \\u003e strings can not be null"
}
JSON;
        $expect = json_encode(json_decode($expect));
        $this->assertJsonStringEqualsJsonString($expect, $actual);
    }

}
