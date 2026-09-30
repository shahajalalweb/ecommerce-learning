<?php

namespace App\Http\Controllers;
use App\Models\Product;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('products', compact('products'));
    }

    public function create()
    {
        return view('products-create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
        ]);

            Product::create([
        'name' => $request->name,
        'price' => $request->price,
        'description' => $request->description,
    ]);

        return redirect('/Products');
    }

    
        public function edit(Product $product)
    {
        return view('products-edit', compact('product'));
    }

    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
        ]);

        $product->update([
            'name' => $request->name,
            'price' => $request->price,
            'description' => $request->description,
        ]);

        return redirect('/Products');
    }

    public function destroy(Product $product)
        {
            $product->delete();

            return redirect('/Products');
        }   















}
