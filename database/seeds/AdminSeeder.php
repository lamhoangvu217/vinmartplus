<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
            'name' => 'Lam Vu Hoang',
            'email' => 'lambeobn@gmail.com',
            'password' => Hash::make('123123123'),
        ]);
        DB::table('admins')->insert([
            'name' => 'Nguyen Dai Cuong',
            'email' => 'cuongbs@gmail.com',
            'password' => Hash::make('1233'),
        ]);
        DB::table('admins')->insert([
            'name' => 'Nguyen Anh Duc',
<<<<<<< HEAD
            'email' => 'nguyenanhduc123456@gmail.com',
            'password' => Hash::make('123123123'),
=======
            'email' => 'nguyenanhduc@gmail.com',
            'password' => Hash::make('12345678'),
>>>>>>> e32d8cac3b003c47ff8d099faa87e80b0065fecc
        ]);
    }
}
