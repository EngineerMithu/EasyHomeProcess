<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'name' => 'Admin',
            'slug' => 'admin',
        ]);


        DB::table('roles')->insert([
            'name' => 'Manager',
            'slug' => 'manager',
        ]);


        DB::table('roles')->insert([
            'name' => 'Tenant',
            'slug' => 'tenant',
        ]);

        DB::table('roles')->insert([
            'name' => 'Security',
            'slug' => 'security',
        ]);

        DB::table('roles')->insert([
            'name' => 'Machanic',
            'slug' => 'machanic',
        ]);

        DB::table('roles')->insert([
            'name' => 'Driver',
            'slug' => 'driver',
        ]);
    }
}
