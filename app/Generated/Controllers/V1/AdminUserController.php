<?php

namespace App\Generated\Controllers\V1;

use App\Http\Controllers\Controller;
use App\Http\Services\V1\AdminUserService;
use DB;
use App\Generated\V1\Messages\AdminUser\GetUsersMessage;

class AdminUserController extends Controller
{
    public $service;

    public function __construct(AdminUserService $service)
    {
        $this->service = $service;
    }

    public function getUsers(GetUsersMessage $message)
    {
        $message->validateInput();
        $this->service->getUsers($message);
        $message->validateOutput();
        return $message->getResponse();
    }

}
