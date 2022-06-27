<?php

namespace Database\Seeders;

use App\Models\Serie;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SeriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Serie::create([
            'id' => 111,
            'title'=>'Obi-Wan Kenobi' , 
            'season'=>'1',
            'episode_count'=>'6',
            'topic_id'=>1,
            'cover'=>'!obi.jpg',
        ]);
        Serie::create([
            'id'=>669,
            'title'=>'Mandalorian' , 
            'season'=>'1',
            'episode_count'=>'8',
            'topic_id'=>1,
            'cover'=>'!mandos1.webp',
        ]);
        Serie::create([
            'id'=>670,
            'title'=>'Mandalorian' , 
            'season'=>'2',
            'episode_count'=>'8',
            'topic_id'=>1,
            'cover'=>'!mandos2.jpg',
        ]);
    }
}
