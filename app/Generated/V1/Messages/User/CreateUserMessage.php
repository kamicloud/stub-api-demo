<?php

namespace App\Generated\V1\Messages\User;

use App\Generated\V1\Models\UserModel;
use YetAnotherGenerator\Utils\Constants;
use YetAnotherGenerator\BaseMessage;
use YetAnotherGenerator\ValueHelper;
use App\Generated\V1\Enums\GenderEnum;

class CreateUserMessage extends BaseMessage
{
    use ValueHelper;

    protected $email;
    protected $emails;
    protected $gender;
    protected $genders;
    protected $id;
    protected $ids;
    protected $user;
    protected $users;

    /**
     * 查询的ID
     */
    public function getEmail()
    {
        return $this->email;
    }

    public function getEmails()
    {
        return $this->emails;
    }

    public function getGender()
    {
        return $this->gender;
    }

    public function getGenders()
    {
        return $this->genders;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getIds()
    {
        return $this->ids;
    }

    public function requestRules()
    {
        return [
            ['email', 'email', 'bail|required|String', Constants::IS_OPTIONAL],
            ['emails', 'emails', 'bail|required|String', Constants::IS_OPTIONAL | Constants::IS_ARRAY],
            ['gender', 'gender', GenderEnum::class, Constants::IS_ENUM],
            ['genders', 'genders', GenderEnum::class, Constants::IS_ENUM | Constants::IS_ARRAY],
            ['id', 'id', 'bail|required|Integer', Constants::IS_OPTIONAL],
            ['ids', 'ids', 'bail|required|Integer', Constants::IS_OPTIONAL | Constants::IS_ARRAY],
        ];
    }

    public function responseRules()
    {
        return [
            ['user', 'user', UserModel::class, Constants::IS_MODEL],
            ['users', 'users', UserModel::class, Constants::IS_MODEL | Constants::IS_ARRAY],
        ];
    }

    public function setResponse($user, $users)
    {
        $this->user = $user;
        $this->users = $users;
    }

}
