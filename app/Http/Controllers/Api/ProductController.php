<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Http\Resources\ProductCollection;

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
        return response()->json([
            'products' =>  ProductCollection::collection($products),
            'success' => true,
        ],200);
    } 
}
