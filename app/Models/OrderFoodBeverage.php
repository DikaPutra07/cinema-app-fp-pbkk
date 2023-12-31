<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderFoodBeverage extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'payment_id',
        'payment_number',
        'payment_account',
        'total',
        'time'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function payment()
    {
        return $this->belongsTo(Payment::class);
    }

    public function orderFoodBeverageDetails()
    {
        return $this->hasMany(OrderFoodBeverageDetails::class);
    }
}
