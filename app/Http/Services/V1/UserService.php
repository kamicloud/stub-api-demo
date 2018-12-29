<?php

namespace App\Http\Services\V1;

use App\Generated\V1\Messages\User\CreateUserMessage;
use App\Generated\V1\Messages\User\GetUsersMessage;
use App\Generated\V1\Models\UserModel;
use App\Models\User;

class UserService
{
    public static function getUsers(GetUsersMessage $message)
    {
        $message->getTestUser();

        $userModel = UserModel::initFromEloquent(User::first());

        $message->setResponse('xxxx', $userModel);
    }

    public static function createUser(CreateUserMessage $message)
    {
        $email = $message->getEmail();
        $emails = $message->getEmails();
        $id = $message->getId();
        $ids = $message->getIds();
        $gender = $message->getGender();
        $genders = $message->getGenders();

        $user = User::create([
            'email' => uniqid(),
            'name' =>  "\"\\\n\'",
            'password' => uniqid()
        ]);
        $users = User::take(1)->get();

//        dd($user->toArray(), $email, $emails, $id, $ids, $gender, $genders);
        $message->setResponse(
            UserModel::initFromEloquent($user),
            UserModel::initFromEloquents($users)
        );
    }
}
