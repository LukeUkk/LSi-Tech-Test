<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Controllers\Closure;

class ProductController extends Controller
{

    /**
     * Display the specified resource.
     */
    public function show($productName, Product $product)
    {

        $productName = str_replace('-', ' ', $productName);

        $product = Product::where('name', $productName)->first();
        $product->price = number_format($product->price, 2, '.', '');
        
        return view('product.show', compact('product'));
    }
}
