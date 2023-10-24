<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderMerch extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'payment_id',
        'total',
        'time'
    ];

    public function order_merch_details(){
        return $this->hasMany(OrderMerchDetail::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function payment(){
        return $this->belongsTo(Payment::class);
    }
}
