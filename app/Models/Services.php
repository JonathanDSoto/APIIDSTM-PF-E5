<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'resume',
        'is_active',
        'available_days',
        'category_id',
        'price_id',
    ];

    public function Images()
    {
        return $this->belongsToMany(Images::class);
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
