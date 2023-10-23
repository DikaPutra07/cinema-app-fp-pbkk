<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MovieRental extends Model
{
    use HasFactory;
    protected $fillable = [
        'rented_at',
        // 'returned_at', // rented_at + 30 days, filable?
        'user_id',
        'movie_id'
    ];

    // one to one?
    public function rental_payments()
    {
        return $this->hasMany(RentalPayment::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function movie_for_rent()
    {
        return $this->belongsTo(MovieForRent::class);
    }
}
