<?php

use Illuminate\Database\Seeder;
use App\Model\User;
// use App\Model\Role;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

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
                'firstName' => 'Admin',
                'lastName' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('admin@123'), // secret
                'type' => 1,
                'status' => 1,
                'created_at' => time(),
            ];


                $createduser =  User::create($users);

                $users1 = [
                        'firstName' => 'Admin',
                        'lastName' => 'admin',
                        'email' => 'admin1@gmail.com',
                        'password' => Hash::make('admin@123'), // secret
                        'type' => 1,
                        'status' => 1,
                        'created_at' => time(),
                    ];


                        $createduser =  User::create($users1);

    }
}
