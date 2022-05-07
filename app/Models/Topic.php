<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'

    ];

    public function film(){
        return $this -> hasMany(Film::class);
    }
    public function serie(){
        return $this -> hasMany(Serie::class);
    }
}
