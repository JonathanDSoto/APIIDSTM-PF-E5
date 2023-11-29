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
        'duration',
        'category_id',
        'price_id',
        'schedual_id',
    ];

    public function Images(){
        return $this->belongsToMany(Images::class);
    }
}
