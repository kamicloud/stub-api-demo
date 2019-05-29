<?php

namespace App\Generated\V1\Messages\User;

use App\Generated\V1\Enums\Gender;
use Kamicloud\StubApi\Concerns\ValueHelper;
use Kamicloud\StubApi\Http\Messages\Message;
use Kamicloud\StubApi\Utils\Constants;
use App\Generated\V1\DTOs\UserDTO;

class CreateUserMessage extends Message
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
            ['email', 'email', 'bail|String', null],
            ['emails', 'emails', 'bail|String', Constants::IS_ARRAY],
            ['gender', 'gender', Gender::class, Constants::IS_ENUM],
            ['genders', 'genders', Gender::class, Constants::IS_ARRAY | Constants::IS_ENUM],
            ['id', 'id', 'bail|Integer', null],
            ['ids', 'ids', 'bail|Integer', Constants::IS_ARRAY],
        ];
    }

    public function responseRules()
    {
        return [
            ['user', 'user', UserDTO::class, Constants::IS_MODEL],
            ['users', 'users', UserDTO::class, Constants::IS_ARRAY | Constants::IS_MODEL],
        ];
    }

    public function setResponse($user, $users)
    {
        $this->user = $user;
        $this->users = $users;
    }

}
