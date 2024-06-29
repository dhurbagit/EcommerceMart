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
        $featured_product = Product::where(['featured' => '1', 'status' => 1])->orderBy('id', 'DESC')->get();
        $brandList = Brand::orderBy('id', 'DESC')->get();
        $tagsList = Tag::orderBy('id', 'DESC')->get();
        $salesList = Product::where(['sales' => 1, 'status' => 1])->orderBy('id', 'DESC')->get();
        $randomCatgoryList  = Category::inRandomOrder()->first();
        $randomCatgoryList1  = Category::whereNotIn('id', [(string)$randomCatgoryList->id])->inRandomOrder()->first();
        $randomCatgoryList2  = Category::whereNotIn('id', [(string)$randomCatgoryList->id, (string)$randomCatgoryList1])->inRandomOrder()->first();
        $randomCatgoryList3  = Category::whereNotIn('id', [(string)$randomCatgoryList->id, (string)$randomCatgoryList1, (string)$randomCatgoryList2])->inRandomOrder()->first();
        // dd($randomCatgoryList);

        return view('frontend.index',  compact(
            'categoryList',
            'featured_product',
            'brandList',
            'tagsList',
            'salesList',
            'randomCatgoryList',
            'randomCatgoryList1',
            'randomCatgoryList2',
            'randomCatgoryList3'
        ));
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
