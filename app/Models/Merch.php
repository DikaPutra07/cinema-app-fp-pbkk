<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Merch extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'price',
    ];

    public function order_merch_details(){
        return $this->hasMany(OrderMerchDetail::class);
    }
}
