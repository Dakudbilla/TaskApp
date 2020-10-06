<?php

use Illuminate\Database\Seeder;

class AuthUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('auth_users')->insert([
            'name' => 'Daniel',
            'email' => 'danny@npontu.com',
            'created_by' => 1,
            'password' => Hash::make('daniel'),
        ]);
    }
}
