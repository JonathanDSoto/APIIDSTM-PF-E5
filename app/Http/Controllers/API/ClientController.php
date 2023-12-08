<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Client;
class ClientController extends Controller
{
    public function index()
    {
        $clients = Client::all();
        return response()->json($clients);
    }

    public function store(Request $request)
    {
        $client = new Client;
        $client->name = $request->input('name');
        $client->lastname = $request->input('lastname');
        $client->phone = $request->input('phone');
        $client->email = $request->input('email');

        $client->save();
        return response()->json($client);
    }

    public function show($id)
    {
        $client = Client::find($id);
        if (!$client) {
            return response()->json(['message' => 'Client not found'], 404);
        }
        return response()->json($client);
    }

    public function update(Request $request, $id)
    {
        $client = Client::find($id);
        if (!$client) {
            return response()->json(['message' => 'Client not found'], 404);
        }
        $client->name = $request->input('name');
        $client->lastname = $request->input('lastname');
        $client->phone = $request->input('phone');
        $client->email = $request->input('email');
        $client->save();
        return response()->json($client);
    }

    public function destroy($id)
    {
        $client = Client::find($id);
        if (!$client) {
            return response()->json(['message' => 'Client not found'], 404);
        }
        $client->delete();
        return response()->json(['message' => 'Client deleted']);
    }
}
