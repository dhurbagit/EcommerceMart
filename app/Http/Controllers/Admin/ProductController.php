<?php

namespace App\Http\Controllers\Admin;

use App\Models\Image;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
      
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $collection = Category::all();
        return view('backend.products.form', compact('collection'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        // dd( request());
        
        // $input = $request->all();

        $input['product_name']= $request->product_name;
        $input['unit']= $request->unit;
        $input['price']= $request->price;
        $input['refundable']= isset($request->refundable[0]) ? 1 : 0;
        $input['description']= $request->description;
        $input['featured']= isset($request->featured[0]) ? 1 : 0;
        $input['today_deal']= isset($request->today_deal[0]) ? 1 : 0;
        $input['flash_title']= $request->flash_title;
        $input['discount']= $request->discount;
        $input['discount_type']= $request->discount_type;
        $input['discount_type']= $request->discount_type;

        // creating new Thumbnail images 
        if ($request->hasFile('t_image')) {
            $input['t_image'] = $request->file('t_image')->store('thumbnail', 'uploads');
            $getID = Image::create($input);
        }
      
        // create new collection of Imagegallery with thumbnail images id
        if (!empty($request->g_image)) {
            foreach ($request->g_image as $img) {
                $imgName = $img->store('gallery', 'uploads');
                $getID->galleryimage()->create(['g_image' => $imgName]);
            }
        }
        
        $input['image_id'] = $getID['id']; // adding primary key id in foreign key table for product table
        Product::create($input);
        
        return redirect()->back();
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
