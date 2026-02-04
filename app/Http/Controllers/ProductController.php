<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $categories = Category::active()->ordered()->withCount('activeProducts')->get();
        $products = Product::active()->ordered()
            ->with('category', 'primaryImage')
            ->paginate(12);

        return view('public.products.index', compact('categories', 'products'));
    }

    public function show(string $slug)
    {
        $product = Product::where('slug', $slug)
            ->active()
            ->with(['category', 'images', 'faqs'])
            ->firstOrFail();

        $relatedProducts = Product::where('category_id', $product->category_id)
            ->where('id', '!=', $product->id)
            ->active()
            ->with('primaryImage')
            ->take(4)
            ->get();

        return view('public.products.show', compact('product', 'relatedProducts'));
    }

    public function category(string $slug)
    {
        $category = Category::where('slug', $slug)->active()->firstOrFail();
        $products = Product::where('category_id', $category->id)
            ->active()
            ->ordered()
            ->with('primaryImage')
            ->paginate(12);

        $categories = Category::active()->ordered()->withCount('activeProducts')->get();

        return view('public.products.category', compact('category', 'products', 'categories'));
    }
}
