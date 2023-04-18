<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class TestController extends Controller
{

    public function products()
    {
        return view('testing', [
            'products' => Product::all()
        ]);
    }

    public function show($id)
    {
        // dd('hello');
        return view('test33');
        // return view('test33', [
        //     'product' => Product::findOrFail($id)
        // ]);
    }

    public function testing()
    {
        // dd('hello');
        return view('test33');
        // return view('test33', [
        //     'product' => Product::findOrFail($id)
        // ]);
    }
}
