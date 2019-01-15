<?php

namespace App\Generated\V1\Messages\User;

use App\Generated\V1\Models\UserModel;
use YetAnotherGenerator\BaseMessage;
use YetAnotherGenerator\ValueHelper;
use App\Generated\V1\Enums\GenderEnum;

class GetUsersMessage extends BaseMessage
{
    use ValueHelper;

    protected $id;
    protected $gender;
    protected $page;
    protected $testUser;
    protected $testUsers;
    protected $val;
    protected $user;

    /**
     * 查询的ID
     */
    public function getId()
    {
        return $this->id;
    }

    public function getGender()
    {
        return $this->gender;
    }

    public function getPage()
    {
        return $this->page;
    }

    public function getTestUser()
    {
        return $this->testUser;
    }

    public function getTestUsers()
    {
        return $this->testUsers;
    }

    public function requestRules()
    {
        return [
            ['id', 'id', false, false, 'bail|required|Integer', false, false, false],
            ['gender', 'gender', false, false, GenderEnum::class, false, false, true],
            ['page', 'page', false, false, 'bail|nullable|Integer', true, false, false],
            ['testUser', 'test_user', true, false, UserModel::class, true, false, false],
            ['testUsers', 'test_users', true, true, UserModel::class, true, false, false],
        ];
    }

    public function responseRules()
    {
        return [
            ['val', 'val', false, false, 'bail|required|String', false, false, false],
            ['user', 'user', true, false, UserModel::class, false, false, false],
        ];
    }

    public function setResponse($val, $user)
    {
        $this->val = $val;
        $this->user = $user;
    }

}
