<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Package;
use App\Models\Testimonial;
use App\Models\Article;
use App\Models\Gallery;

class HomeController extends Controller
{
    public function index()
    {
        $categories = Category::active()->ordered()->take(6)->get();
        $featuredProducts = Product::active()->featured()->with('category', 'primaryImage')->take(6)->get();
        $packages = Package::active()->featured()->take(3)->get();
        $testimonials = Testimonial::published()->ordered()->take(6)->get();
        $articles = Article::published()->latest()->take(3)->get();
        $galleries = Gallery::published()->featured()->take(4)->get();

        return view('public.home', compact(
            'categories',
            'featuredProducts',
            'packages',
            'testimonials',
            'articles',
            'galleries'
        ));
    }
}
