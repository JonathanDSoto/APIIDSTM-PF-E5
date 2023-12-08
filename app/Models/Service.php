<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'resume',
        'is_active',
        'available_days',
        'category_id',
        'price_id',
        'adultPrice',
        'childPrice',
    ];

    public function images()
    {
        return $this->belongsToMany(Images::class);
    }
    public function categories()
    {
        return $this->belongsTo(Category::class);
    }
    public function reservations(){
        return $this->hasMany(Reservation::class);
    }

}
