<?php

namespace Database\Seeders;

use App\Models\Episode;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EpisodeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Episode::create([
            'title'=>'The Mandalorian' , 
            'minute_long'=>'41',
            'episode_number'=>1,
            'serie_id'=>669,
        ]);
        Episode::create([
            'title'=>'The Child' , 
            'minute_long'=>'34',
            'episode_number'=>1,
            'serie_id'=>669,
        ]);
        Episode::create([
            'title'=>'The Sin' , 
            'minute_long'=>'39',
            'episode_number'=>1,
            'serie_id'=>669,
        ]);
        Episode::create([
            'title'=>'Sanctuary' , 
            'minute_long'=>'43',
            'episode_number'=>1,
            'serie_id'=>669,
        ]);
        Episode::create([
            'title'=>'The Gunslinger' , 
            'minute_long'=>'37',
            'episode_number'=>1,
            'serie_id'=>669,
        ]);
        Episode::create([
            'title'=>'The Prisoner' , 
            'minute_long'=>'45',
            'episode_number'=>1,
            'serie_id'=>669,
        ]);
        Episode::create([
            'title'=>'The Reckoning' , 
            'minute_long'=>'42',
            'episode_number'=>1,
            'serie_id'=>669,
        ]);
        Episode::create([
            'title'=>'Redemption' , 
            'minute_long'=>'50',
            'episode_number'=>1,
            'serie_id'=>669,
        ]);
        //Mando 2
        Episode::create([
            'title'=>'Chapter 9' , 
            'minute_long'=>'50',
            'episode_number'=>1,
            'serie_id'=>670,
        ]);
        Episode::create([
            'title'=>'Chapter 10' , 
            'minute_long'=>'50',
            'episode_number'=>2,
            'serie_id'=>670,
        ]);
        Episode::create([
            'title'=>'Chapter 11' , 
            'minute_long'=>'50',
            'episode_number'=>3,
            'serie_id'=>670,
        ]);
        Episode::create([
            'title'=>'Chapter 12' , 
            'minute_long'=>'50',
            'episode_number'=>4,
            'serie_id'=>670,
        ]);
        Episode::create([
            'title'=>'Chapter 13' , 
            'minute_long'=>'50',
            'episode_number'=>5,
            'serie_id'=>670,
        ]);
        Episode::create([
            'title'=>'Chapter 14' , 
            'minute_long'=>'50',
            'episode_number'=>6,
            'serie_id'=>670,
        ]);
        Episode::create([
            'title'=>'Chapter 15' , 
            'minute_long'=>'50',
            'episode_number'=>7,
            'serie_id'=>670,
        ]);
        Episode::create([
            'title'=>'Chapter 16' , 
            'minute_long'=>'50',
            'episode_number'=>8,
            'serie_id'=>670,
        ]);
        //Obi
        Episode::create([
            'title'=>'Obi: Episode 1' , 
            'minute_long'=>'50',
            'episode_number'=>1,
            'serie_id'=>111,
        ]);
        Episode::create([
            'title'=>'Obi: Episode 2' , 
            'minute_long'=>'50',
            'episode_number'=>2,
            'serie_id'=>111,
        ]);
    }
}
