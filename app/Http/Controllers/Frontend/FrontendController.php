<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\Tag;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $categoryList = Category::whereNull('category_id')->orderBy('id', 'DESC')->get();
        $featured_product = Product::where(['featured'=> '1', 'status' => 1])->orderBy('id', 'DESC')->get();
        $brandList = Brand::orderBy('id', 'DESC')->get();
        $tagsList = Tag::orderBy('id', 'DESC')->get();
        
       
        return view('frontend.index',  compact('categoryList', 'featured_product', 'brandList', 'tagsList'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
