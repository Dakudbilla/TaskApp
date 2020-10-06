<?php

use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('roles')->insert([
            'name' => 'Super Admin',
            'created_by' => 1,
        ]);

        DB::table('roles')->insert([
            'name' => 'Users',
            'created_by' => 1,
        ]);

        DB::table('roles')->insert([
            'name' => 'Component',
            'created_by' => 1,
        ]);

        DB::table('roles')->insert([
            'name' => 'Customers',
            'created_by' => 1,
        ]);

        DB::table('roles')->insert([
            'name' => 'Shipping',
            'created_by' => 1,
        ]);
    }
}
