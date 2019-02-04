<?php

namespace App\Generated\V1\Messages\User;

use App\Generated\V1\Models\UserModel;
use YetAnotherGenerator\Utils\Constants;
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
            ['id', 'id', 'bail|required|Integer', Constants::IS_OPTIONAL],
            ['gender', 'gender', GenderEnum::class, Constants::IS_ENUM],
            ['page', 'page', 'bail|nullable|Integer', null],
            ['testUser', 'test_user', UserModel::class, Constants::IS_MODEL],
            ['testUsers', 'test_users', UserModel::class, Constants::IS_MODEL | Constants::IS_ARRAY],
        ];
    }

    public function responseRules()
    {
        return [
            ['val', 'val', 'bail|required|String', Constants::IS_OPTIONAL],
            ['user', 'user', UserModel::class, Constants::IS_MODEL],
        ];
    }

    public function setResponse($val, $user)
    {
        $this->val = $val;
        $this->user = $user;
    }

}
