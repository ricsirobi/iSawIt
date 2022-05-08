<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Serie extends Model
{
    use HasFactory;

    protected $fillable = [
        'season', 'episode_count', 'category_id', 'title', 'cover'

    ];


    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function episode()
    {
        return $this->hasMany(Episode::class);
    }

}
