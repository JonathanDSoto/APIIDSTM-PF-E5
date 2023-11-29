<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;
    protected $fillable = [
        'client_id',
        'service_id',
        'schedual_id',
        'coupon_id',
        'discount_id',
        'adultTotal',
        'childTotal',
        'total'
    ];
}
