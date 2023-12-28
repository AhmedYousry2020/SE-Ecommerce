<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
class CategoryController extends Controller
{
    /**
     * Display a listing of the category resource.
     *
     * @return \Illuminate\Http\redirectResponse
     */
    public function index()
    {
        $categories = Category::orderBy('id')->get();
        return view('app.categories.index', compact('categories'));
    }
    /**
     * Display a listing of the category resource with child catgeories and products.
     * @param $categoryId 
     * @return \Illuminate\Http\redirectResponse
     */
    public function getCategory($categoryId)
    {
        $category = Category::with('childrenCategories','products','products.shop')->where('id', $categoryId)->orderBy('id')->first();
        return view('app.categories.show', compact('category'));

    }
}
