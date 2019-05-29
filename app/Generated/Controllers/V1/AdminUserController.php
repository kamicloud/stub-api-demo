<?php

namespace App\Generated\Controllers\V1;

use Illuminate\Contracts\Foundation\Application;
use App\Http\Controllers\Controller;
use App\Http\Services\V1\AdminUserService;
use DB;
use App\Generated\V1\Messages\AdminUser\GetUsersMessage;

class AdminUserController extends Controller
{
    protected $application;

    public function __construct(Application $application)
    {
        $this->application = $application;
        $this->application->singleton(GetUsersMessage::class);
    }

    public function getUsers(GetUsersMessage $message)
    {
        $message->validateInput();
        $this->application->call(AdminUserService::class, [], 'getUsers');
        $message->validateOutput();
        return $message->getResponse();
    }

}
