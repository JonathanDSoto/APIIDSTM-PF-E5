<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Client;
use App\Models\Reservation;
use App\Models\Service;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function home()
    {
        $clients = Client::all()->count();
        $services = Service::with('categories')->get()->groupBy('category.name');
        $topServices = Service::select('services.id', 'services.name')
            ->join('reservations', 'services.id', '=', 'reservations.service_id')
            ->selectRaw('SUM(reservations.total) as total_revenue')
            ->groupBy('services.id', 'services.name')
            ->orderBy('total_revenue', 'desc')
            ->limit(3)
            ->get();

        foreach ($topServices as $service) {
            $reservations = Reservation::where('service_id', $service->id)
                ->orderBy('created_at', 'asc')
                ->limit(10)
                ->get();
            $service->reservations = $reservations;
        }

        $sellsByMonth = Reservation::selectRaw('SUM(total) as total, DATE_FORMAT(created_at, "%M") as month, MONTH(created_at) as month_number')
            ->whereYear('created_at', date('Y'))
            ->groupBy('month', 'month_number')
            ->orderBy('month_number')
            ->get();

        $sellsByCategory = Category::selectRaw('SUM(reservations.total) as total, categories.name')
            ->join('services', 'categories.id', '=', 'services.category_id')
            ->join('reservations', 'services.id', '=', 'reservations.service_id')
            ->groupBy('categories.name')
            ->get();

        $topClients = Client::select('clients.*')
            ->join('reservations', 'clients.id', '=', 'reservations.client_id')
            ->selectRaw('SUM(reservations.total) as total_revenue')
            ->groupBy('clients.id')
            ->orderBy('total_revenue', 'desc')
            ->limit(10)
            ->get();

        return view('home', [
            'client' => $clients,
            'reservation' => $reservations,
            'services' => $services,
            'topServices' => $topServices,
            'sellsByMonth' => $sellsByMonth,
            'sellsByCategory' => $sellsByCategory,
            'topClients' => $topClients,
        ]);
    }
}
