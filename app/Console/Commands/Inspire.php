<?php

namespace App\Console\Commands;

use App\Generated\V1\Models\UserModel;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Console\Command;

class Inspire extends Command
{
    protected $signature = 'inspire';

    protected $description = 'Command description';

    public function handle()
    {
        $model = User::with([
            'child',
            'children',
//            'temp',
        ])->first();

//        dd(config('app.env'));
//        $models = User::get();
//        $model->toArray();

//        dd($model->toArray());
//        dd($model->attributesToArray() + $model->getRelations());
        config([
            'app.env' => 'testing',
        ]);
        $userModel = UserModel::initFromEloquent($model);
        dd($userModel->jsonSerialize());
    }
}
