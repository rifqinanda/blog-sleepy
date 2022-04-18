<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            ['name' => 'Admin', 'email' => 'admin@laravel.com', 'password' => bcrypt('123')],
        ];

        $user = User::insert($user);
    }
}
