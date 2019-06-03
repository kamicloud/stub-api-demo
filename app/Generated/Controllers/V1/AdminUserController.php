<?php

namespace App\Generated\Controllers\V1;

use App\Http\Controllers\Controller;
use App\Http\Services\V1\AdminUserService;
use DB;
use App\Generated\V1\Messages\AdminUser\GetUsersMessage;

class AdminUserController extends Controller
{
    public $handler;

    public function __construct(AdminUserService $handler)
    {
        $this->handler = $handler;
    }

    public function getUsers(GetUsersMessage $message)
    {
        $message->validateInput();
        $this->handler->getUsers($message);
        $message->validateOutput();
        return $message->getResponse();
    }

}
