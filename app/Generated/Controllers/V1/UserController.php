<?php

namespace App\Generated\Controllers\V1;

use Illuminate\Contracts\Foundation\Application;
use App\Generated\V1\Messages\User\GetUsersMessage;
use App\Generated\V1\Messages\User\CreateUserMessage;
use App\Http\Controllers\Controller;
use App\Http\Services\V1\UserService;
use DB;

class UserController extends Controller
{
    protected $application;

    public function __construct(Application $application)
    {
        $this->application = $application;
        $this->application->singleton(CreateUserMessage::class);
        $this->application->singleton(GetUsersMessage::class);
    }

    public function createUser(CreateUserMessage $message)
    {
        $message->validateInput();
        $this->application->call(UserService::class, [], 'createUser');
        $message->validateOutput();
        return $message->getResponse();
    }

    public function getUsers(GetUsersMessage $message)
    {
        $message->validateInput();
        $this->application->call(UserService::class, [], 'getUsers');
        $message->validateOutput();
        return $message->getResponse();
    }

}
