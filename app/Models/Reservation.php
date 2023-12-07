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
        'startDate',
        'endDate',
        'adultTotal',
        'childTotal',
        'total'
    ];

    public function client()
    {
        return $this->belongsTo(Client::class, 'client_id');
    }

    public function service()
    {
        return $this->belongsTo(Service::class, 'service_id');
    }

    public function categories(){
        return $this->hasManyThrough(Category::class, Service::class);
    }
}
