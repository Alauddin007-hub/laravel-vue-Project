<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Medicine;
use Illuminate\Http\Request;

class MedicineController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $medicines = Medicine::all();
        return view('admin.madicine.index', compact('medicines'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $cat = Category::all();
        return view('admin.madicine.create', compact('cat'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());

        // <!-- name 	category_id 	brand 	purchase_price 	discount 	selling_price  photo	stock -->

        $this->validate($request, [
            'name' => 'required',
            'category' => 'required',
            'purchase_price' => 'nullable|max:15',
            'stock' => 'nullable|max:15',
            'photo' => 'image|mimes:jpg,jpeg,png,webp,gif',
        ]);

        $imageName = time() . '.' . $request->photo->extension();

        $data = [
            'name' => $request->name,
            'category_id' => $request->category,
            'brand' => $request->brand,
            'purchase_price' => $request->purchase_price,
            'discount' => $request->discount,
            'selling_price' => $request->selling_price,
            'stock' => $request->stock,
            'photo' => $imageName,
        ];

        // dd($data);
        Medicine::create($data);
        $request->photo->move(('storage/medicine'), $imageName);
        return redirect('medicines')->with('success', "Medicine has been added");
    }

    /**
     * Display the specified resource.
     */
    public function show(Medicine $medicine)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Medicine $medicine, $id)
    {
        $medicine = Medicine::find($id);
        $cat = Category::all();
        return view('admin.madicine.edit', compact( 'medicine','cat'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Medicine $medicine)
    {
        $this->validate($request, [
            'name' => 'required',
            'category' => 'required',
            'purchase_price' => 'nullable|max:15',
            'stock' => 'nullable|max:15',
            'photo' => 'image|mimes:jpg,jpeg,png,webp,gif',
        ]);

        $imageName = time() . '.' . $request->photo->extension();

        $data = [
            'name' => $request->name,
            'category_id' => $request->category,
            'brand' => $request->brand,
            'purchase_price' => $request->purchase_price,
            'discount' => $request->discount,
            'selling_price' => $request->selling_price,
            'stock' => $request->stock,
            'photo' => $imageName,
        ];

        // dd($data);
        $medicine = Medicine::find($request->id);
        $medicine->update($data);
        $request->photo->move(('storage/medicine'), $imageName);
        return redirect('medicines')->with('success', "Medicine has been Changed");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $medicine = Medicine::find($request->id);
        $medicine->delete();
        return back()->with('success', "Medicine has been deleted");
    }
}
