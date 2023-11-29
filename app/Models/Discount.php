<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Discount extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'discount'
    ];

    public function prices()
    {
        return $this->belongsToMany(Prices::class);
    }
}
