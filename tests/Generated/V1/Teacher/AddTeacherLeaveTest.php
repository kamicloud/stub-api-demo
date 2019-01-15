<?php

namespace Tests\Generated\V1\Teacher;

use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;

class AddTeacherLeaveTest extends TestCase
{
    use DatabaseTransactions;

    public function testCase0()
    {
        $response = $this->post('/api/V1/Teacher/AddTeacherLeave', [
            'reason' => 'ACTIVITY',
            'name' => 'xxx',
        ]);
        $actual = $response->getContent();
        $expect = <<<JSON
{
  "status": 10001.0,
  "message": "root \\u003e names should be array"
}
JSON;
        $expect = json_encode(json_decode($expect));
        $this->assertJsonStringEqualsJsonString($expect, $actual);
    }

    public function testCase1()
    {
        $response = $this->post('/api/V1/Teacher/AddTeacherLeave', [
            'reason' => 'EVENT',
            'name' => 'xxx',
        ]);
        $actual = $response->getContent();
        $expect = <<<JSON
{
  "status": 10001.0,
  "message": "root \\u003e names should be array"
}
JSON;
        $expect = json_encode(json_decode($expect));
        $this->assertJsonStringEqualsJsonString($expect, $actual);
    }

    public function testCase2()
    {
        $response = $this->post('/api/V1/Teacher/AddTeacherLeave', [
            'reason' => 'RELAX',
            'name' => 'xxx',
        ]);
        $actual = $response->getContent();
        $expect = <<<JSON
{
  "status": 10001.0,
  "message": "root \\u003e names should be array"
}
JSON;
        $expect = json_encode(json_decode($expect));
        $this->assertJsonStringEqualsJsonString($expect, $actual);
    }

    public function testCase3()
    {
        $response = $this->post('/api/V1/Teacher/AddTeacherLeave', [
            'reason' => '0',
            'name' => 'xxx',
        ]);
        $actual = $response->getContent();
        $expect = <<<JSON
{
  "status": 10001.0,
  "message": "root \\u003e names should be array"
}
JSON;
        $expect = json_encode(json_decode($expect));
        $this->assertJsonStringEqualsJsonString($expect, $actual);
    }

}
