<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;

class ServicesController extends Controller
{
    public function index()
    {
        $services = Services::all();
        return view('services.index', compact('services'));
    }

    public function create()
    {
        return view('services.create');
    }

    public function store(Request $request)
    {
        $service = new Service();
        $service->name = $request->input('name');
        $service->description = $request->input('description');
        $service->save();

        return redirect()->route('services.index')->with('success', 'Service created successfully');
    }

    public function show($id)
    {
        $service = Service::find($id);
        return view('services.show', compact('service'));
    }

    public function edit($id)
    {
        $service = Service::find($id);
        return view('services.edit', compact('service'));
    }

    public function update(Request $request, $id)
    {
        $service = Service::find($id);
        $service->name = $request->input('name');
        $service->description = $request->input('description');
        $service->save();

        return redirect()->route('services.index')->with('success', 'Service updated successfully');
    }

    public function destroy($id)
    {
        $service = Service::find($id);
        $service->delete();

        return redirect()->route('services.index')->with('success', 'Service deleted successfully');
    }
}
    
