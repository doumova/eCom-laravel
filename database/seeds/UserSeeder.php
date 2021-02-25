<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
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
            'name'=>'soda gueye',
            'email'=>'@gmail.com',
            'password'=>Hash::make('12345')
        ]);
    }
}
