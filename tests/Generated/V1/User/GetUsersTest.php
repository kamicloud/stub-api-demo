<?php

namespace Tests\Generated\V1\User;

use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;

class GetUsersTest extends TestCase
{
    use DatabaseTransactions;

    public function testCase0()
    {
        $response = $this->post('/api/V1/User/GetUsers', [
            'gender' => '0',
            'id' => '0\'',
            'testUser' => '{"xxxxx":"xx","id":0,"name":"x","email":"x"}',
            'testUsers' => '{"val":"param1","user":{"xxxxx":"xx"}}',
        ]);
        $actual = $response->getContent();
        $expect = <<<JSON
{
  "status": 10001.0,
  "message": "root \\u003e testUser\\n-----\\nThe avatar field is required."
}
JSON;
        $expect = json_encode(json_decode($expect));
        $this->assertJsonStringEqualsJsonString($expect, $actual);
    }

    public function testCase1()
    {
        $response = $this->post('/api/V1/User/GetUsers', [
            'gender' => 'MALE',
            'id' => '0',
            'testUser' => '{"xxxxx":"xx","id": "xx","name":"x","email":"x"}',
            'testUsers' => '{"val":"param1","user":{"xxxxx":"xx"}}',
        ]);
        $actual = $response->getContent();
        $expect = <<<JSON
{
  "status": 10001.0,
  "message": "root \\u003e testUser\\n-----\\nThe avatar field is required."
}
JSON;
        $expect = json_encode(json_decode($expect));
        $this->assertJsonStringEqualsJsonString($expect, $actual);
    }

    public function testCase2()
    {
        $response = $this->post('/api/V1/User/GetUsers', [
            'gender' => 'MALE',
            'id' => '"xxx"',
            'testUser' => '{"xxxxx":"xx","id": "xx","name":"x","email":"x"}',
            'testUsers' => '{"val":"param1","user":{"xxxxx":"xx"}}',
        ]);
        $actual = $response->getContent();
        $expect = <<<JSON
{
  "status": 10001.0,
  "message": "root \\u003e testUser\\n-----\\nThe avatar field is required."
}
JSON;
        $expect = json_encode(json_decode($expect));
        $this->assertJsonStringEqualsJsonString($expect, $actual);
    }

    public function testCase3()
    {
        $response = $this->post('/api/V1/User/GetUsers', [
            'gender' => 'MALE',
            'id' => 'MALE',
            'testUser' => '{"xxxxx":"xx","id": "xx","name":"x","email":"x"}',
            'testUsers' => '{"val":"param1","user":{"xxxxx":"xx"}}',
        ]);
        $actual = $response->getContent();
        $expect = <<<JSON
{
  "status": 10001.0,
  "message": "root \\u003e testUser\\n-----\\nThe avatar field is required."
}
JSON;
        $expect = json_encode(json_decode($expect));
        $this->assertJsonStringEqualsJsonString($expect, $actual);
    }

    public function testCase4()
    {
        $response = $this->post('/api/V1/User/GetUsers', [
            'gender' => 'MALE',
            'id' => 'MALE',
            'testUser' => '{"xxxxx":"xx","id": "FEMALE","name":"x","email":"x"}',
            'testUsers' => '{"val":"param1","user":{"xxxxx":"xx"}}',
        ]);
        $actual = $response->getContent();
        $expect = <<<JSON
{
  "status": 10001.0,
  "message": "root \\u003e testUser\\n-----\\nThe avatar field is required."
}
JSON;
        $expect = json_encode(json_decode($expect));
        $this->assertJsonStringEqualsJsonString($expect, $actual);
    }

}
