<?php

class TagTableSeeder extends Seeder {

    public function run () {
        DB::table ( 'tags' )->delete ();

        Tag::create(['name' => 'school']);
    }
}
