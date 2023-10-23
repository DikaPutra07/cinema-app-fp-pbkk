<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderMerchDetail extends Model
{
    use HasFactory;
    protected $fillable = [
        'order_merch_id',
        'merch_id',
        'quantity',
        'total',
    ];

    public function order_merch(){
        return $this->belongsTo(OrderMerch::class);
    }

    public function merch(){
        return $this->belongsTo(Merch::class);
    }
}
