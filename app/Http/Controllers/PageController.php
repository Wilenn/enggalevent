<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;

class PageController extends Controller
{
    public function about()
    {
        $testimonials = Testimonial::published()->ordered()->take(4)->get();

        return view('public.about', compact('testimonials'));
    }

    public function contact()
    {
        return view('public.contact');
    }
}
