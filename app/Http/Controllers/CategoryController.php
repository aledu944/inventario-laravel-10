<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();
        return view("categories.index", array('categories' => $categories));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function create(Request $request)
    {
        return view("categories.create");
    }

    public function store(Request $request)
    {
        $category = new Category();

        $category->name = $request->name;
        $category->image = $request->image->store("images", "public");

        $category->save();

        return redirect('/categories');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        $category = Category::find($id);
        return view("categories.edit",  array('category' => $category));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $category = Category::find($id);
        $category->name = $request->name;

        if ($request->hasFile('image')) {
            $category->image = $request->image->store("images", "public");
        }

        $category->save();


        return redirect('/categories');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $category = Category::find($id);
        $category->delete();
        return redirect('/categories');
    }
}
