<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Show extends Model
{
    use HasFactory;

    protected $fillable = [
        'start_time',
        'date',
        'movie_id',
        'studio_id',
        'price',
        'remaining_seats',
    ];

    public function movie()
    {
        return $this->belongsTo(Movie::class);
    }

    public function studio()
    {
        return $this->belongsTo(Studio::class);
    }

    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }
}
