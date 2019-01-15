<?php

use Illuminate\Database\Seeder;
use App\Models\{
    Role,
    User
};

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::insert(Role::DATA);
        for ($i = 1; $i < 10; $i++) {

            User::create([
                'id' => $i,
                'name' => 'Ttdnts',
                'email' => $i . '@qq.com',
                'avatar' => $i % 2 ? 'https://avatars3.githubusercontent.com/u/25639206?s=88&v=4' : 'https://avatars1.githubusercontent.com/u/44454975?s=88&v=4',
                'password' => bcrypt('123456'),
            ]);
        }
    }
}
