<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = [
        'method'
    ];

    public function reservation()
    {
        return $this->hasMany(Reservation::class);
    }

    public function orderBev()
    {
        return $this->hasMany(OrderBev::class);
    }

    public function order_merches()
    {
        return $this->hasMany(OrderMerch::class);
    }

    public function rental_payments()
    {
        return $this->hasMany(RentalPayment::class);
    }
}
