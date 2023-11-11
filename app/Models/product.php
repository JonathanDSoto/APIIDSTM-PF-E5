<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;



    public function category(): HasOne
    {
        return $this->hasOne(category::class);
    }
}
