<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class productController extends Controller
{
    public function index() {
        $products = Product::all();
        return response()->json($products, 200);
    }

    public function create(Request $request) {
        $products = Product::create($request->all());
        return response()->json($products, 201);
    }

    public function update($id, Request $request) {
        $product = Product::find($id);
        $product->fill($request->all())->save();
        return response()->json($product, 200);
    }

    public function delete($id) {
        $product = Product::find($id);
        if ($product) {
            $product->delete();
            return response()->json(null, 204);
        }
        return response()->json(null, 500);
    }
}
