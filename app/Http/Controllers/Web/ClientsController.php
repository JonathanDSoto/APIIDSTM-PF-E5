<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;

class ClientsController extends Controller
{
    public function index()
    {
        $clients = Client::all();
        return view('clients.index', compact('clients'));
    }
    
    public function create()
    {
        return view('clients.create');
    }

    public function store(Request $request)
    {
        $client = new Client();
        $client->name = $request->input('name');
        $client->email = $request->input('email');
        // Set other properties as needed
        $client->save();

        return redirect()->route('clients.index')->with('success', 'Client created successfully');
    }

    public function edit(Client $client)
    {
        return view('clients.edit', compact('client'));
    }

    public function update(Request $request, Client $client)
    {
        $client->name = $request->input('name');
        $client->email = $request->input('email');
        // Update other properties as needed
        $client->save();

        return redirect()->route('clients.index')->with('success', 'Client updated successfully');
    }

    public function destroy(Client $client)
    {
        $client->delete();

        return redirect()->route('clients.index')->with('success', 'Client deleted successfully');
    }
}