<?php

class UserTableSeeder extends Seeder {

    public function run()
    {
        DB::table('users')->delete();


        User::create(array(
            'email'=>'csoliz7@gmail.com',
            'password'=>Hash::make('terranova')
        ));
    }
}