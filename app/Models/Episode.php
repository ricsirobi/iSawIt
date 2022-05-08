<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Episode extends Model
{
    use HasFactory;

    protected $fillable = [
        'title','episode_number','topic_id', 'minute_long', 'serie_id' 

    ];

    public function serie()
    {
        return $this -> belongsTo(Serie::class);
    }

    public function views()
    {
        return $this->morphMany(View::class,"viewable");
    }

    
}
