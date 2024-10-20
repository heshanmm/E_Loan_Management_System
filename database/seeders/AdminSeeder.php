<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $admins = [
            /* [
                'name' => 'Test Admin',
                'usertype' => 'admin',
                'contact' => '0702324345',
                'email' => 'testadmin2@mail.com',
                'password' => Hash::make('testadmin2'),
            ],
            [
                'name' => 'Loan Officer',
                'usertype' => 'loanofficer',
                'contact' => '0702324347',
                'email' => 'loanofficer@mail.com',
                'password' => Hash::make('loanofficer'),
            ],
            [
                'name' => 'Manager',
                'usertype' => 'manager',
                'contact' => '0702324347',
                'email' => 'manager@mail.com',
                'password' => Hash::make('manager'),
            ], */
            [
                'name' => 'Manager',
                'usertype' => 'manager',
                'contact' => '0702324347',
                'email' => 'manager1@mail.com',
                'password' => Hash::make('manager'),
            ],
            [
                'name' => 'Manager',
                'usertype' => 'manager',
                'contact' => '0702324347',
                'email' => 'manager2@mail.com',
                'password' => Hash::make('manager'),
            ],
            [
                'name' => 'Manager',
                'usertype' => 'manager',
                'contact' => '0702324347',
                'email' => 'manager3@mail.com',
                'password' => Hash::make('manager'),
            ],
            [
                'name' => 'Manager',
                'usertype' => 'manager',
                'contact' => '0702324347',
                'email' => 'manager4@mail.com',
                'password' => Hash::make('manager'),
            ],
            [
                'name' => 'Manager',
                'usertype' => 'manager',
                'contact' => '0702324347',
                'email' => 'manager5@mail.com',
                'password' => Hash::make('manager'),
            ],
            [
                'name' => 'Manager',
                'usertype' => 'manager',
                'contact' => '0702324347',
                'email' => 'manager6@mail.com',
                'password' => Hash::make('manager'),
            ],
            [
                'name' => 'Manager',
                'usertype' => 'manager',
                'contact' => '0702324347',
                'email' => 'manager7@mail.com',
                'password' => Hash::make('manager'),
            ],
            [
                'name' => 'Manager',
                'usertype' => 'manager',
                'contact' => '0702324347',
                'email' => 'manager8@mail.com',
                'password' => Hash::make('manager'),
            ],
            [
                'name' => 'Manager',
                'usertype' => 'manager',
                'contact' => '0702324347',
                'email' => 'manager9@mail.com',
                'password' => Hash::make('manager'),
            ],
            [
                'name' => 'Manager',
                'usertype' => 'manager',
                'contact' => '0702324347',
                'email' => 'manager10@mail.com',
                'password' => Hash::make('manager'),
            ],
            [
                'name' => 'Manager',
                'usertype' => 'manager',
                'contact' => '0702324347',
                'email' => 'manager11@mail.com',
                'password' => Hash::make('manager'),
            ],
            [
                'name' => 'Manager',
                'usertype' => 'manager',
                'contact' => '0702324347',
                'email' => 'manager12@mail.com',
                'password' => Hash::make('manager'),
            ],
            [
                'name' => 'Manager',
                'usertype' => 'manager',
                'contact' => '0702324347',
                'email' => 'manager13@mail.com',
                'password' => Hash::make('manager'),
            ],
            [
                'name' => 'Manager',
                'usertype' => 'manager',
                'contact' => '0702324347',
                'email' => 'manager14@mail.com',
                'password' => Hash::make('manager'),
            ],
            [
                'name' => 'Manager',
                'usertype' => 'manager',
                'contact' => '0702324347',
                'email' => 'manager15@mail.com',
                'password' => Hash::make('manager'),
            ],
            [
                'name' => 'Manager',
                'usertype' => 'manager',
                'contact' => '0702324347',
                'email' => 'manager16@mail.com',
                'password' => Hash::make('manager'),
            ],
        ];

        foreach ($admins as $admin) {
            DB::table('users')->insert($admin);
        }
    }
}
