<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'category_id',
        'price_id',
        'image_id'
    ];

    public function Images(){
        return $this->belongsToMany(Images::class);
    }
}
