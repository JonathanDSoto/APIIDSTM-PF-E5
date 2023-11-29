<?php

namespace App\Http\Controllers;

use App\Models\Services;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('services.index', [
            'services' => Services::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('services.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'resume' => 'required|max:255',
            'is_active' => 'required',
            'available_days' => 'required|max:255',
            'category_id' => 'required',
            'adultPrice' => 'required|numeric',
            'childPrice' => 'required|numeric',
        ]);
        Services::create([
            'name' => $validatedData['name'],
            'resume' => $validatedData['resume'],
            'is_active' => $validatedData['is_active'],
            'available_days' => $validatedData['available_days'],
            'category_id' => $validatedData['category_id'],
            'adultPrice' => $validatedData['adultPrice'],
            'childPrice' => $validatedData['childPrice'],
        ]);
        return redirect(route('category.show', ['category' => $validatedData['category_id']]))->with('message', 'Servicio creado correctamente');
    }
    /**
     * Display the specified resource.
     */
    public function show(Services $services)
    {
        //
        /* $services->load('images'); */
        return view('services.show', [
            'services' => $services
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Services $services)
    {
        //
        return view('services.edit', [
            'services' => $services
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Services $services)
    {
        //
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'resume' => 'required|max:255',
            'is_active' => 'required',
            'available_days' => 'required|max:255',
            'category_id' => 'required',
            'adultPrice' => 'required|numeric',
            'childPrice' => 'required|numeric',
        ]);
        $services->update([
            'name' => $validatedData['name'],
            'resume' => $validatedData['resume'],
            'is_active' => $validatedData['is_active'],
            'available_days' => $validatedData['available_days'],
            'category_id' => $validatedData['category_id'],
            'adultPrice' => $validatedData['adultPrice'],
            'childPrice' => $validatedData['childPrice'],
        ]);
        return redirect(route('category.show', ['category' => $validatedData['category_id']]))->with('message', 'Servicio creado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Services $services)
    {
        //
        $services->delete();
        return redirect(route('category.index'))->with('message', 'Servicio eliminado correctamente');
    }
}
