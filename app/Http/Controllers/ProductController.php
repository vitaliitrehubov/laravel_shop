<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{

    public function index()
    {
        $data = Product::all();

        // if (!isset($data)) {
        //     return abort(404);
        // }
        dd($data);
        return '<h1>Products List Page</h1>';
    }

    public function create()
    {
        return '<h1>Create Product Form</h1>';
    }

    public function store(Request $request)
    {
        dd('storing a product');
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
