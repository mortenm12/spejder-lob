<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            ['name' => 'Test Bruger', 'email' => 'test@test.com', 'password' => Hash::make('password')],
        ];

        if ( App::environment('local') ) {
            foreach($users as $user)
            {
                User::create($user);
            }
        }
    }
}
