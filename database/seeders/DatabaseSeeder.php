<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this -> call(TopicsTableSeeder::class);
        $this -> call(FilmsTableSeeder::class);
        $this -> call(SeriesTableSeeder::class);
        $this -> call(EpisodeTableSeeder::class);
        $this -> call(UsersTableSeeder::class);
    }
}
