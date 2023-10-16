<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Beverage extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'price',
        'image',
        'bev_category_id',
    ];

    public function category()
    {
        return $this->belongsTo(Bevcategory::class);
    }

    public function carts()
    {
        return $this->hasMany(Cart::class);
    }

    public function orderBevDetails()
    {
        return $this->hasMany(OrderBevDetail::class);
    }
}
