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
        User::create([
            'name' => 'Ibrahim',
            'email' => 'ibrahim@gmail.com',
            'created_by' => 'ibrahim',
            'password' => Hash::make('123456789'),
        ]);
    }
}
