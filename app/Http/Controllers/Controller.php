<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Reservation;
use App\Models\Services;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function home()
    {
        $clients = Client::all();
        $reservations = Reservation::all();
        $services = Services::with('category')->get()->groupBy('category.name');
        return view('home', [
            'client' => $clients,
            'reservation' => $reservations,
            'services' => $services
        ]);
    }
}
