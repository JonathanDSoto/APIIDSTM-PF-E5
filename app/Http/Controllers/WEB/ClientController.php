<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('client.index', [
            'clients' => Client::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('client.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'lastname' => 'max:255',
            'email' => 'required|email|unique:clients',
            'phone' => 'required|numeric',
        ]);

        //
        Client::create([
            'name' => $validatedData['name'],
            'lastname' => $validatedData['lastname'],
            'email' => $validatedData['email'],
            'phone' => $validatedData['phone'],
            'phone2' => $validatedData['phone2'] ?? null,
        ]);

        return redirect(route('client.index'))->with('message', 'Cliente creado correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Client $client)
    {
        //
        $client->load('reservation');
        return view('client.show', [
            'client' => $client
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Client $client)
    {
        //
        return view('client.edit', [
            'client' => $client
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Client $client)
    {
        //
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'lastname' => 'max:255',
            'email' => 'required|email|unique:clients,email,' . $client->id,
            'phone' => 'required|numeric',
        ]);

        $client->update([
            'name' => $validatedData['name'],
            'lastname' => $validatedData['lastname'],
            'email' => $validatedData['email'],
            'phone' => $validatedData['phone'],
            'phone2' => $validatedData['phone2'] ?? null,
        ]);

        return redirect(route('client.index'))->with('message', 'Cliente actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Client $client)
    {
        //
        $client->delete();
        return redirect(route('client.index'))->with('message', 'Cliente eliminado correctamente');
    }
}
