<?php

namespace App\Http\Controllers;

use App\Models\Gallery;

class GalleryController extends Controller
{
    public function index()
    {
        $galleries = Gallery::published()
            ->latest('event_date')
            ->paginate(12);

        return view('public.galleries.index', compact('galleries'));
    }

    public function show(string $slug)
    {
        $gallery = Gallery::where('slug', $slug)
            ->published()
            ->with('images')
            ->firstOrFail();

        return view('public.galleries.show', compact('gallery'));
    }
}
