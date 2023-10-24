<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Director extends Model
{
    use HasFactory;
    protected $fillable = [
        'name'
    ];

    public function movie_for_rents(){
        return $this->hasMany(MovieForRent::class);
    }

    public function movies(){
        return $this->hasMany(Movie::class);
    }
}
