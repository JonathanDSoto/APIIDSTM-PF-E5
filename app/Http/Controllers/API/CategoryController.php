<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return response()->json($categories);
    }

    public function show(Category $category)
    {
        return $category;
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
        ]);

        $category = Category::create($validatedData);

        return response()->json($category, 201);
    }

    public function update(Request $request, Category $category)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
        ]);

        $category->update($validatedData);

        return response()->json($category, 200);
    }

    public function delete(Category $category)
    {
        $category->delete();
        return response()->json(null, 204);
    }
}
