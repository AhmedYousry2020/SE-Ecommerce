<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Http\Resources\CategoryCollection;
class CategoryController extends Controller
{
    /**
     * Display a listing of the category resource with child catgeories and products.
     * @param $categoryId 
     * @return \Illuminate\Http\redirectResponse
     */
    public function getCategory($categoryId)
    {
        $category = Category::with('childrenCategories','products','products.shop')->where('id', $categoryId)->orderBy('id')->first();
        return response()->json([
            'category' => new CategoryCollection($category),
            'success' => true,
        ],200);
    }
}
