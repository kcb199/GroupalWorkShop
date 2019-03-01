<?php

namespace App\Http\Controllers;
Use App\Category;

use Illuminate\Http\Request;

class categoryController extends Controller
{
   public function index() {
        $category = Category::all();
        return response()->json($category, 200);
    }

    public function create(Request $req) {
        $category = Category::create($req->all());
        return response()->json($category, 201);
    }

    public function update($id, Request $req) {
        $category = Category::find($id);
        $category->fill($req->all())->save();
        return response()->json($category, 200);
    }

    public function delete($id) {
        $category = Category::find($id);
        if ($category) {
            $category->delete();
            return response()->json(null, 204);
        }
        return response()->json(null, 500);
    }

}
