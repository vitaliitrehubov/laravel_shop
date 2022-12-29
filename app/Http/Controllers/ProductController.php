<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index()
    {
        return view('products.index');
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


    public function show($id)
    {
        return "<h1>Showing Product #{$id}</h1>";
    }


    public function edit($id)
    {
        return "<h1>Editing Product #{$id} Form</h1>";
    }


    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
