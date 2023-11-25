<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = [
        'method',
        'image'
    ];

    public function reservation()
    {
        return $this->hasMany(Reservation::class);
    }

    public function orderfoodbeverages()
    {
        return $this->hasMany(OrderFoodBeverage::class);
    }
}
