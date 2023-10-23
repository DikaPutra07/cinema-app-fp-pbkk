<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RentalPayment extends Model
{
    use HasFactory;
    protected $fillable = [
        'total',
        'rented_at',
        'payment_id',
        'user_id',
        'movie_rental_id'
    ];

    public function payment()
    {
        return $this->belongsTo(Payment::class);
    }

    // one to one?
    public function movie_rental()
    {
        return $this->belongsTo(MovieRental::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
