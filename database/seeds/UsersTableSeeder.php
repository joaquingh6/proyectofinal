<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\User::truncate();
        DB::table('users')->insert([
            'name' => 'ADMIN',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('secret'),
            'role_id' => '1'
        ]);
    }
}
