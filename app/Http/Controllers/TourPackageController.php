<?php

namespace App\Http\Controllers;

use App\Models\TourCategory;
use App\Models\TourPackage;
use Illuminate\Http\Request;

class TourPackageController extends Controller
{
    /**
     * Halaman daftar paket — bisa filter per kategori
     */
    public function index(Request $request)
    {
        $categories = TourCategory::where('is_active', true)
            ->orderBy('sort_order')
            ->withCount(['packages' => fn($q) => $q->where('is_active', true)])
            ->get();

        $activeCategory = null;

        $query = TourPackage::with(['category', 'images'])
            ->where('is_active', true)
            ->orderBy('sort_order');

        if ($request->filled('category')) {
            $activeCategory = TourCategory::where('slug', $request->category)
                ->where('is_active', true)
                ->firstOrFail();
            $query->where('tour_category_id', $activeCategory->id);
        }

        $packages = $query->get();

        return view('tour.index', compact('categories', 'packages', 'activeCategory'));
    }

    /**
     * Halaman detail paket
     */
    public function show(TourPackage $tourPackage)
    {
        abort_if(! $tourPackage->is_active, 404);

        $tourPackage->load(['category', 'images']);

        $related = TourPackage::with('images')
            ->where('is_active', true)
            ->where('tour_category_id', $tourPackage->tour_category_id)
            ->where('id', '!=', $tourPackage->id)
            ->orderBy('sort_order')
            ->take(3)
            ->get();

        return view('tour.show', compact('tourPackage', 'related'));
    }
}