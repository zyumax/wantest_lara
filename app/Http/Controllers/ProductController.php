<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index() {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    public function create() {
        return view('products.create');
    }

    public function store(Request $request) {
        $product = Product::create(
            [
            'name' => $request->name,
            'price' => $request->price,
            'remark' => $request->remark,
            'evaluation' => $request->evaluation
            ]
        );
        // dd($product);
        return back();
    }

    public function destroy(Product $product) {
        $product->delete();
        return redirect()->route('product.create');
    }

    public function show() {
        return view('products.show');
    }

    public function edit(Product $product) {
        return view('products.edit', compact('product'));
    }

    public function update(Request $request, Product $product) {
        $validated = $request->validate([
            'name' => 'required|max:20',
            'price' => 'required|max:10',
            'remark' => 'required|max:40',
        ]);
        $product->update($validated);
        return redirect()->route('product.index');
    }
}