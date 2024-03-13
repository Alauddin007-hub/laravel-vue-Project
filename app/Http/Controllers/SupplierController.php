<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $supplier = Supplier::all();
        return view('admin.supplier.index', compact('supplier'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.supplier.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());

        $this->validate($request, [
            'name' => 'required',
            'phone' => 'required',
            'address' => 'required',
        ]);

        Supplier::insert([
            'name'=> $request->name,
            'phone'=> $request->phone,
            'address'=> $request->address,
        ]);

        return redirect('suppliers')->with('success', 'Supplier has been added');
    }

    /**
     * Display the specified resource.
     */
    public function show(Supplier $supplier)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Supplier $supplier, $id)
    {
        $supplier = Supplier::find($id);
        return view('admin.supplier.edit', compact('supplier'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Supplier $supplier)
    {
        // dd($request->all());

        $this->validate($request, [
            'name' => 'required',
            'phone' => 'required',
            'address' => 'required',
        ]);

        $supplier = Supplier::find($request->id);
        $supplier->update([
            'name'=> $request->name,
            'phone'=> $request->phone,
            'address'=> $request->address,
        ]);

        return redirect('suppliers')->with('success', 'Supplier has been Changed');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $medicine = Supplier::find($request->id);
        $medicine->delete();
        return back()->with('success', "Supplier has been deleted");
    }
}
