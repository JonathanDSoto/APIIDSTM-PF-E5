<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
    // ...
    /**
     * Display a listing of the resource.
     */
    public function index(){
        //
        return view('category.index', [
            'categories' => Category::all()
        ]);
    }

    public function home(){
        //
        return view('home', [
            'categories' => Category::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(){
        //
        return view('category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $response = Http::get('https://placehold.co/600x400/000000/FFFFFF/png');
        if ($response->ok()) {
            $url = $response->url();
            $request->merge(['image_url' => $url]);
        }

        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'image_url' => 'image|max:2048'
        ]);

        $imagePath = $request->file('image_url')->store('public/images');
        $imageUrl = null;

        if (!Storage::exists($imagePath)) {
            $imageUrl = asset(Storage::url($imagePath));
        }

        Category::create([
            'name' => $validatedData['name'],
            'image_url' => $imageUrl
        ]);
        return redirect(route('home'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
        $category->load('services');
        return view('category.show', [
            'category' => $category
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        //
        return view('category.edit', [
            'category' => $category
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        //
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            /* 'image_url' => 'max:255' */
        ]);
        $category->update([
            'name' => $validatedData['name'],
            /* 'image_url' => $validatedData['image_url'] */
        ]);
        return redirect(route('category.index'))->with('message', 'Categoria actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        //
        $category->delete();
        return redirect(route('category.index'))->with('message', 'Categoria eliminada correctamente');
    }
}
