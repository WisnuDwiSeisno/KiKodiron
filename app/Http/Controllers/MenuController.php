<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;

class MenuController extends Controller
{
    public function index()
    {
        $categories = Category::with('products')->get();

        return view('menu.index', compact('categories'));
    }

    public function category($slug)
    {
        $category = Category::where('slug', $slug)
            ->with('products')
            ->firstOrFail();

        return view('menu.category', compact('category'));
    }

    public function show($category, $product)
    {
        $product = Product::where('slug', $product)
            ->whereHas('category', function ($query) use ($category) {
                $query->where('slug', $category);
            })
            ->with('category')
            ->firstOrFail();

        return view('menu.show', compact('product'));
    }
}