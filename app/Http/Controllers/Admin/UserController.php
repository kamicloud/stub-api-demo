<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        return [
            'users' => User::with([
                'roles',
            ])->withCount([
                'articles'
            ])->orderBy('id', 'desc')->get(),
        ];
    }

    public function create()
    {
    }

    public function show($id)
    {
        return [
            'user' => User::where('id', $id)->with([
                'roles',
            ])->withCount([
                'articles'
            ])->first(),
        ];
    }
}
