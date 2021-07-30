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
        //
        DB::table('users')->insert([
            'name' => 'Shehu Abdulqudus',
            'email' => 'tacticshsutle@gmail.com',
            'password' => Hash::make('12345')
        ]);
    }
}
