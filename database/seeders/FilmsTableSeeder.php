<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Film;

class FilmsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Film::create([
            'title'=>'Star Wars Episode I: The Phantom Menace' , 
            'minute_long'=>'133',
            'topic_id'=>1,
            'cover'=>'!sw1.jpg',
        ]);
        Film::create([
            'title'=>'Star Wars Episode II: Attack of the Clones' , 
            'minute_long'=>'142',
            'topic_id'=>1,
            'cover'=>'!sw2.jpg',
        ]);
        Film::create([
            'title'=>'Star Wars Episode III: Revenge of the Sith' , 
            'minute_long'=>'140',
            'topic_id'=>1,
            'cover'=>'!sw3.jpg',
        ]);
    }
}
