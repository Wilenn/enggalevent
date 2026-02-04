<?php

namespace App\Http\Controllers;

use App\Models\Package;

class PackageController extends Controller
{
    public function index()
    {
        $packages = Package::active()->ordered()->paginate(9);

        return view('public.packages.index', compact('packages'));
    }

    public function show(string $slug)
    {
        $package = Package::where('slug', $slug)
            ->active()
            ->with('products')
            ->firstOrFail();

        return view('public.packages.show', compact('package'));
    }
}
