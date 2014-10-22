<?php


class UserTableSeeder extends Seeder {
    public function run () {
        DB::table ( 'users' )->delete ();
        User::create ( [
            'fullname' => 'Luc Matagne',
            'email'    => 'quelumatagne@gmail.com',
            'password' => Hash::make ( 'lopolo' )
        ] );
        User::create ( [
            'fullname' => 'Super carotte',
            'email'    => 'super@carotte.com',
            'password' => Hash::make ( 'polopo' )
        ] );
    }
}
