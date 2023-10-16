<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderBev extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'payment_id',
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

    public function orderBevDetails()
    {
        return $this->hasMany(OrderBevDetail::class);
    }
}
