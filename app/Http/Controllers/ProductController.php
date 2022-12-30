<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function __construct ()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

    public function index()
    {
        $products = Product::all();
        return view('products.index', ['products' => $products]);
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        $formData = $request->validate([
            'title' => ['required', 'min:3', 'max:20'],
            'description' => ['required', 'min:20', 'max:255'],
            'status' => ['required', 'in:available,unavailable'],
            'price' => ['required', 'min:0'],
            'stock' => ['required', 'min:0']
        ]);

        Product::create($formData);

        return redirect()->route('products.index')->with(['msg' => 'Product has beed added successfully!']);
    }


    public function show(Product $product)
    {
        return "<h1>Showing Product {$product->title}</h1>";
    }


    public function edit(Product $product)
    {
        return view('products.edit', ['product' => $product]);
    }


    public function update(Request $request, Product $product)
    {
        $formData = $request->validate([
            'title' => ['required', 'min:3', 'max:20'],
            'description' => ['required', 'min:20', 'max:255'],
            'status' => ['required', 'in:available,unavailable'],
            'price' => ['required', 'min:0'],
            'stock' => ['required', 'min:0']
        ]);

        $product->update($formData);

        return redirect()->route('products.show', $product->id);
    }

    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('products.index');
    }
}
