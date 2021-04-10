<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            'role_id' =>'1',
            'name' => 'Md. Admin',
            'username' => 'Admin',
            'email' => 'admin778@gmail.com',
            'password' => bcrypt('rootadmin'),         
        ]);


        DB::table('users')->insert([
            'role_id' =>'2',
            'name' => 'Md. Manager',
            'username' => 'Manager',
            'email' => 'manager778@gmail.com',
            'password' => bcrypt('rootauthor'),         
        ]);


        DB::table('users')->insert([
            'role_id' =>'3',
            'name' => 'Tenant',
            'username' => 'Tenant',
            'email' => 'tenant778@gmail.com',
            'password' => bcrypt('roottenant'),         
        ]);


        DB::table('users')->insert([
            'role_id' =>'4',
            'name' => 'Security',
            'username' => 'security',
            'email' => 'security778@gmail.com',
            'password' => bcrypt('rootsecurity'),         
        ]);


        DB::table('users')->insert([
            'role_id' =>'5',
            'name' => 'Machanic',
            'username' => 'Machanic',
            'email' => 'machanic@gmail.com',
            'password' => bcrypt('rootmacha'),         
        ]);


        DB::table('users')->insert([
            'role_id' =>'6',
            'name' => 'Driver',
            'username' => 'Driver',
            'email' => 'driver778@gmail.com',
            'password' => bcrypt('rootdriver'),         
        ]);


    }
}
