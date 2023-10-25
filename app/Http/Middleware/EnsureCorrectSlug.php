<?php

namespace App\Http\Middleware;

use App\Models\Product;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EnsureCorrectSlug
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next)
    {
        $slug = $request->route('name');

        $productName = str_replace('-', ' ', $slug);

        $product = Product::where('name', $productName)->first();

        $correctSlug = str_replace(' ', '-', $product->name);

        if ($slug !== $correctSlug) {
            // Redirect to the URL with the correct slug
            return redirect()->route('product.show', $product);
        }

        return $next($request);
    }
}
