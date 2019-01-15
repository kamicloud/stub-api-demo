<?php

namespace App\Generated\Controllers\V1;

use App\Generated\V1\Messages\User\GetUsersMessage;
use App\Generated\V1\Messages\User\CreateUserMessage;
use App\Http\Controllers\Controller;
use App\Http\Services\V1\UserService;
use Illuminate\Http\Request;
use DB;

class UserController extends Controller
{
    public function createUser(Request $request)
    {
        $message = new CreateUserMessage($request);
        $message->validateInput();
        UserService::createUser($message);
        $message->validateOutput();
        return $message->getResponse();
    }

    public function getUsers(Request $request)
    {
        $message = new GetUsersMessage($request);
        $message->validateInput();
        UserService::getUsers($message);
        $message->validateOutput();
        return $message->getResponse();
    }

}
