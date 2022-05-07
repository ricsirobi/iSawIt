<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    use HasFactory;

    protected $fillable = [
        'title','topic_id', 'minute_long', 'cover' 

    ];

    public function topic()
    {
        return $this -> belongsTo(Topic::class);
    }

    public function user()
    {
        return $this -> belongsToMany(User::class);
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
    

}
