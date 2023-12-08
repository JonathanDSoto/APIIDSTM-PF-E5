<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PDFData extends Model
{
    use HasFactory;

    protected $fillable = [
        'clientName',
        'clientLastname',
        'clientEmail',
        'clientPhone',
        'clientPhone2',
        'serviceName',
        'serviceDescription',
        'servicePrice',
        'serviceCategory',
        'serviceImage',
        'reservationStartDate',
        'reservationEndDate',
        'reservationAdultTotal',
        'reservationChildTotal',
        'reservationTotal',
        'reservationId',
        'reservationCreatedAt',
    ];
}
