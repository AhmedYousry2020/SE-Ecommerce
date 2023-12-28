<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class ProductController extends Controller
{
   /**
     * Display a listing of the products resource.
     *
     * @return \Illuminate\Http\redirectResponse
     */
    public function index()
    {
        $products = collect();
        $categoryIds = Category::all()->pluck('id');
        $categoryWithOneProduct = Category::withWhereHas('products')->latest()->get()
        ->map(function ($query) use($products) {
            $query->setRelation('products', $query->products->take(1));
            $products->push($query->products->first());
            return $query;
        });
        return view('app.products.index', compact('products'));
    } 
}
