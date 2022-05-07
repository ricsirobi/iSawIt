<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Topic;

class TopicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Topic::create(['name'=>'Sci-Fi']);
        Topic::create(['name'=>'Action']);
        Topic::create(['name'=>'Horror']);
        Topic::create(['name'=>'Comedy']);
        Topic::create(['name'=>'Fantasy']);
        Topic::create(['name'=>'Mystery']);
        Topic::create(['name'=>'Romance']);
        Topic::create(['name'=>'Thriller']);
        Topic::create(['name'=>'Western']);
    }
}
