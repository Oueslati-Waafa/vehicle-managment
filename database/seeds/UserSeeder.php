<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //creating a user
        User::create([
            'name' => 'OUESLATI',
            'surname' => 'wafa',
            'email' => 'oueslatiwafa454@gmail.com',
            'role' => 'admin',
            'password' => Hash::make('Password1234')
        ]);
    }
}
