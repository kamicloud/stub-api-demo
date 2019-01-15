<?php

namespace App\Generated\Controllers\V1;

use App\Http\Controllers\Controller;
use App\Http\Services\V1\AdminUserService;
use Illuminate\Http\Request;
use DB;
use App\Generated\V1\Messages\AdminUser\GetUsersMessage;

class AdminUserController extends Controller
{
    public function getUsers(Request $request)
    {
        $message = new GetUsersMessage($request);
        $message->validateInput();
        AdminUserService::getUsers($message);
        $message->validateOutput();
        return $message->getResponse();
    }

}
