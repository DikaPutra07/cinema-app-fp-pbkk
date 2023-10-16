<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderBevDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_bev_id',
        'beverage_id',
        'quantity'
    ];

    public function orderBev()
    {
        return $this->belongsTo(OrderBev::class);
    }

    public function beverage()
    {
        return $this->belongsTo(Beverage::class);
    }
}
