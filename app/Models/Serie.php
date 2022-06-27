<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Serie extends Model
{
    use HasFactory;

    protected $fillable = [
        'season', 'episode_count', 'topic_id', 'title', 'cover'

    ];


    public function topic()
    {
        return $this -> belongsTo(Topic::class);
    }

    public function episodes()
    {
        return $this -> hasMany(Episode::class);
    }

    public function getHasCoverAttribute()
   {
       return $this->cover != null;
   }
   
    public function getCoverImageAttribute()
   {
       if($this->has_cover)
       {
           return asset("upload/img/cover/{$this->cover}");
       }
    return "https://via.placeholder.com/350";
        
   }

    public function episode()
    {
        return $this->hasMany(Episode::class);
    }

}
