<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;


class CategoryController extends Controller
{
    public function index()
    {
        return response()->json(Auth::user()->categories);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $category = Auth::user()->categories()->create($request->all());

        return response()->json($category, 201);
    }

    public function show($id)
    {
        $category = Auth::user()->categories()->findOrFail($id);
        return response()->json($category);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'sometimes|required|string|max:255',
        ]);

        $category = Auth::user()->categories()->findOrFail($id);
        $category->update($request->all());

        return response()->json($category);
    }

    
    public function destroy($id)
    {
        $category = Auth::user()->categories()->findOrFail($id);
        $category->delete();

        return response()->json(['message' => 'Category deleted successfully!'], 200);
    }
}
