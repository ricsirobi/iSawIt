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
        Topic::create(['id'=>1,'name'=>'Sci-Fi']);
        Topic::create(['id'=>2,'name'=>'Action']);
        Topic::create(['id'=>3,'name'=>'Horror']);
        Topic::create(['id'=>4,'name'=>'Comedy']);
        Topic::create(['id'=>5,'name'=>'Fantasy']);
        Topic::create(['id'=>6,'name'=>'Mystery']);
        Topic::create(['id'=>7,'name'=>'Romance']);
        Topic::create(['id'=>8,'name'=>'Thriller']);
        Topic::create(['id'=>9,'name'=>'Western']);
    }
}
