<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 
        'duration', 
        'description', 
        'rating', 
        'release_date',
        'maturity_rating',
        'language',
        'image',
        'genre_id'
    ];

    public function genre()
    {
        return $this->belongsTo(Genre::class);
    }

    public function shows()
    {
        return $this->hasMany(Show::class);
    }

    public function director()
    {
        return $this->belongsTo(Director::class);
    }

    public function actors()
    {
        return $this->belongsToMany(Actor::class, 'movie_actor')->withTimestamps();
    }
}
