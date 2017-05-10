<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class productController extends Controller
{
    public function showProduct(Request $request, $name)
    {
        $product = Product::where('TITLE', '=', $name)->first();
        return view('product')->with('product', $product);
    }

    public function showGames()
    {
        $product = Product::where('P_TYPE', '=', 'game')->get();
        return view('games')->with('products', $product);
    }
    public function showMovies()
    {
        $product = Product::where('P_TYPE', '=', 'movie')->get();
        return view('movies')->with('products', $product);
    }
}
