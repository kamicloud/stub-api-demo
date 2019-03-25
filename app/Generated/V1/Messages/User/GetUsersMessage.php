<?php

namespace App\Generated\V1\Messages\User;

use App\Generated\V1\Enums\Gender;
use App\Generated\V1\Models\UserModel;
use YetAnotherGenerator\Concerns\ValueHelper;
use YetAnotherGenerator\Utils\Constants;
use YetAnotherGenerator\Http\Messages\Message;

class GetUsersMessage extends Message
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
            ['id', 'id', 'bail|Integer', null],
            ['gender', 'gender', Gender::class, Constants::IS_ENUM],
            ['page', 'page', 'nullable|bail|Integer', Constants::IS_OPTIONAL],
            ['testUser', 'testUser', UserModel::class, Constants::IS_OPTIONAL | Constants::IS_MODEL],
            ['testUsers', 'testUsers', UserModel::class, Constants::IS_OPTIONAL | Constants::IS_ARRAY | Constants::IS_MODEL],
        ];
    }

    public function responseRules()
    {
        return [
            ['val', 'val', 'bail|String', null],
            ['user', 'user', UserModel::class, Constants::IS_MODEL],
        ];
    }

    public function setResponse($val, $user)
    {
        $this->val = $val;
        $this->user = $user;
    }

}
