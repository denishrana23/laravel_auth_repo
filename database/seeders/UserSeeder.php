<?php

namespace Database\Seeders;

use App\Models\User;
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
        $users = [
            [
                'name' => 'Super Admin',
                'email' => 'superadmin@gmail.com',
                'password' => Hash::make('P@ssw0rd')
            ],
            [
                'name' => 'Ashish Rana',
                'email' => 'ashish@gmail.com',
                'password' => Hash::make('P@ssw0rd')
            ],
            [
                'name' => 'Denish Rana',
                'email' => 'denish@gmail.com',
                'password' => Hash::make('P@ssw0rd')
            ]
        ];

        User::insert($users);
    }
}
