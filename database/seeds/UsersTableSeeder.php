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
                'password' => bcrypt('123456'),
            ]);
        }
    }
}
