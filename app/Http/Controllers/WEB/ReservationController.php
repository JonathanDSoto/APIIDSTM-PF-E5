<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Reservation;
use App\Models\Client;
use App\Models\Services;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clients = Client::all();
        $services = Services::with('category')->get()->groupBy('category.name');
        $reservations = Reservation::all();

        return view('reservation.index', [
            'clients' => $clients,
            'services' => $services,
            'reservations' => $reservations,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('reservation.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'client_id' => 'required',
            'service_id' => 'required',
            'start_date' => 'required|date_format:Y-m-d',
            'end_date' => 'required|date_format:Y-m-d',
            'start_hour' => 'required|date_format:H:i',
            'end_hour' => 'required|date_format:H:i',
            'adultTotal' => 'required',
            'childTotal' => 'required',
            'total' => 'required',
        ]);

        // Combine date and time fields
        $startDate = date('Y-m-d H:i:s', strtotime($validatedData['start_date'] . ' ' . $validatedData['start_hour']));
        $endDate = date('Y-m-d H:i:s', strtotime($validatedData['end_date'] . ' ' . $validatedData['end_hour']));

        Reservation::create([
            'client_id' => $validatedData['client_id'],
            'service_id' => $validatedData['service_id'],
            'startDate' => $startDate,
            'endDate' => $endDate,
            'adultTotal' => $validatedData['adultTotal'],
            'childTotal' => $validatedData['childTotal'],
            'total' => $validatedData['total'],
        ]);

        return redirect()->back()->with('message', 'Reservación creada correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Reservation $reservation)
    {
        return view('reservation.show', [
            'reservation' => $reservation
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Reservation $reservation)
    {
        return view('reservation.edit', [
            'reservation' => $reservation
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Reservation $reservation)
    {
        $validatedData = $request->validate([
            'client_id' => 'required',
            'service_id' => 'required',
            'start_date' => 'required|date_format:Y-m-d',
            'end_date' => 'required|date_format:Y-m-d',
            'start_hour' => 'required|date_format:H:i',
            'end_hour' => 'required|date_format:H:i',
            'adultTotal' => 'required',
            'childTotal' => 'required',
            'total' => 'required',
        ]);

        // Combine date and time fields
        $startDate = date('Y-m-d H:i:s', strtotime($validatedData['start_date'] . ' ' . $validatedData['start_hour']));
        $endDate = date('Y-m-d H:i:s', strtotime($validatedData['end_date'] . ' ' . $validatedData['end_hour']));

        $reservation->update([
            'client_id' => $validatedData['client_id'],
            'service_id' => $validatedData['service_id'],
            'startDate' => $startDate,
            'endDate' => $endDate,
            'adultTotal' => $validatedData['adultTotal'],
            'childTotal' => $validatedData['childTotal'],
            'total' => $validatedData['total'],
        ]);

        return redirect()->back()->with('message', 'Reservación actualizada correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reservation $reservation)
    {
        $reservation->delete();
        return redirect()->back()->with('message', 'Reservación eliminada correctamente');
    }
}
