<?php

use Illuminate\Database\Seeder;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $user = new User; 
        $user->name = 'Admin';
        $user->email = 'Admin@gmail.com';
        $user->password = 'Admin2023';
        $user->role = 'admin';
        $user->save();
    }
}
