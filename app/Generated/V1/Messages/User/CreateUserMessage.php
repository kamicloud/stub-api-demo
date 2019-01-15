<?php

namespace App\Generated\V1\Messages\User;

use App\Generated\V1\Models\UserModel;
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
            ['email', 'email', false, false, 'bail|required|String', false, false, false],
            ['emails', 'emails', false, true, 'bail|required|String', false, false, false],
            ['gender', 'gender', false, false, GenderEnum::class, false, false, true],
            ['genders', 'genders', false, true, GenderEnum::class, false, false, true],
            ['id', 'id', false, false, 'bail|required|Integer', false, false, false],
            ['ids', 'ids', false, true, 'bail|required|Integer', false, false, false],
        ];
    }

    public function responseRules()
    {
        return [
            ['user', 'user', true, false, UserModel::class, false, false, false],
            ['users', 'users', true, true, UserModel::class, false, false, false],
        ];
    }

    public function setResponse($user, $users)
    {
        $this->user = $user;
        $this->users = $users;
    }

}
