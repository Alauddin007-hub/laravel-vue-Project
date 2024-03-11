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
        $cats = Category::all();
        return view('admin.category.index', compact('cats'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $this->validate($request, [
            'name' => 'required',
        ]);

        // $data = [
        //     'name' => $request->name,
        // ];

        // dd($data);
        
        Category::create($request->all());
        return redirect('categories')->with('success', "Category has been added");
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category,$id)
    {
        $cats = Category::find($id);

        return view('admin.category.show', compact( 'cats'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category, $id)
    {
        
        $cats = Category::find($id);

        return view('admin.category.edit', compact( 'cats'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        $this->validate($request, [
            'name' => 'required',
        ]);

        // $data = [
        //     'name' => $request->name,
        // ];

        // dd($data);
        
        $category = Category::find($request->id);
        $category->update([
            'name' => $request->name,
        ]);
        return redirect('categories')->with('success', "Category has been Changed");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $category = Category::find($request->id);
        $category->delete();
        return back()->with('success', "Category has been deleted");
    }
}
