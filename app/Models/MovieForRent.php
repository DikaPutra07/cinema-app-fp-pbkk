<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MovieForRent extends Model
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
        'rental_price',
    ];

    public function movie_rentals()
    {
        return $this->hasMany(MovieRental::class);
    }

    public function genre()
    {
        return $this->belongsTo(Genre::class);
    }

    // case director > 1 dikit jadi 1 aja, actors many
    public function director()
    {
        return $this->belongsTo(Director::class);
    }

    public function actors()
    {
        return $this->belongsToMany(Actor::class);
    }
}
