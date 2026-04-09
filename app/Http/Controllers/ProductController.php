<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller {
    public function index() {
        $products = \App\Models\Product::all();
        return view('products.index', compact('products'));
    }

    public function create() {
        return view('products.create');
    }

    public function store(Request $request) {
       $validated = $request->validate([
            'nombre' => 'required | max:255',
            'precio' => 'required|numeric | min:0.2',
            'stock' => 'required|integer | min:0',
            'descripcion' => 'required',
            'imagen' => 'required | url',
        ]);
        \App\Models\Product::create($validated);
        return redirect()->route('products.index')->with('success', 'Skin añadida correctamente.'); 
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return view('products.show', compact('product'));   
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        return redirect()->route('products.show', $product)->with('success', 'Skin actualizada.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect()->route('products.index')->with('success', 'Skin eliminada correctamente.');
    }
}
