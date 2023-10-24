<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'username', 
        'first_name',
        'last_name',
        'email',
        'email_verified_at',
        'password',
        'phone',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }

    public function carts()
    {
        return $this->hasMany(Cart::class);
    }

    public function orderBevs()
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

    public function movie_rentals()
    {
        return $this->hasMany(MovieRental::class);
    }
}
