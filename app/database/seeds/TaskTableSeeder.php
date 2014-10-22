<?php


class TaskTableSeeder extends Seeder {
    public function run () {
        DB::table ( 'tasks' )->delete ();
        Task::create ( [
            'title'   => 'Sortir les poubelles',
            'body'    => 'Le mercredi soir',
            'user_id' => User::whereEmail ( 'quelumatagne@gmail.com' )->first ()->id
        ] );
        Task::create ( [
            'title'   => 'Préparer le souper',
            'body'    => 'Moules frites',
            'user_id' => User::whereEmail ( 'quelumatagne@gmail.com' )->first ()->id
        ] );
        Task::create ( [
            'title'   => 'Manger les carottes',
            'body'    => '',
            'user_id' => User::whereEmail ( 'super@carotte.com' )->first ()->id
        ] );
        Task::create ( [
            'title'   => 'Apprendre Laravel #school',
            'body'    => 'C\'est en cours',
            'user_id' => User::whereEmail ( 'quelumatagne@gmail.com' )->first ()->id
        ] );
    }
}
