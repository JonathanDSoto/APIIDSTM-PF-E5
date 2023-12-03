<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('reservation.index', [
            'reservations' => Reservation::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('reservation.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validatedData = $request->validate([
            'client_id' => 'required',
            'service_id' => 'required',
            'startDate' => 'required',
            'endDate' => 'required',
            'startTime' => 'required',
            'endTime' => 'required',
            'adultTotal' => 'required',
            'childTotal' => 'required',
            'total' => 'required',
        ]);

        Reservation::create([
            'client_id' => $validatedData['client_id'],
            'service_id' => $validatedData['service_id'],
            'startDate' => $validatedData['startDate'],
            'endDate' => $validatedData['endDate'],
            'startTime' => $validatedData['startTime'],
            'endTime' => $validatedData['endTime'],
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
        //
        return view('reservation.show', [
            'reservation' => $reservation
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Reservation $reservation)
    {
        //
        return view('reservation.edit', [
            'reservation' => $reservation
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Reservation $reservation)
    {
        //
        $validatedData = $request->validate([
            'client_id' => 'required',
            'service_id' => 'required',
            'startDate' => 'required',
            'endDate' => 'required',
            'startTime' => 'required',
            'endTime' => 'required',
            'adultTotal' => 'required',
            'childTotal' => 'required',
            'total' => 'required',
        ]);

        $reservation->update([
            'client_id' => $validatedData['client_id'],
            'service_id' => $validatedData['service_id'],
            'startDate' => $validatedData['startDate'],
            'endDate' => $validatedData['endDate'],
            'startTime' => $validatedData['startTime'],
            'endTime' => $validatedData['endTime'],
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
        //
        $reservation->delete();
        return redirect()->back()->with('message', 'Reservación eliminada correctamente');
    }
}
