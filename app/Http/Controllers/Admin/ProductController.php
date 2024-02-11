<?php

namespace App\Http\Controllers\Admin;

use App\Models\Image;
use App\Models\Gallery;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;

class ProductController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $Productlist = Product::orderBy('id', 'DESC')->get();
        return view('backend.products.index', compact('Productlist'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $collection = Category::all();
        $colorVal = [];
        return view('backend.products.form', compact('collection','colorVal'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductRequest $request)
    {
        //


        try {
            $input['product_name'] = $request->product_name;
            $input['slug'] = Str::slug($request->product_name);
            $input['unit'] = $request->unit;
            $input['price'] = $request->price;
            $input['refundable'] = isset($request->refundable[0]) ? 1 : 0;
            $input['description'] = $request->description;
            $input['featured'] = isset($request->featured[0]) ? 1 : 0;
            $input['today_deal'] = isset($request->today_deal[0]) ? 1 : 0;
            $input['flash_title'] = $request->flash_title;
            $input['discount'] = $request->discount;
            $input['discount_type'] = $request->discount_type;
            $input['discount_type'] = $request->discount_type;
            $input['category_key'] = json_encode($request->category_key);
            $input['sales'] = isset($request->sales[0]) ? 1 : 0;
            $input['color'] = json_encode($request->color);


            // creating new Thumbnail images 
            if ($request->hasFile('t_image')) {
                $input['t_image'] = $request->file('t_image')->store('thumbnail', 'uploads');
                $getID = Image::create($input);
            }
            // dd($getID);

            // create new collection of Imagegallery with thumbnail images id
            if (!empty($request->g_image)) {
                foreach ($request->g_image as $img) {
                    $imgName = $img->store('gallery', 'uploads');
                    $getID->galleryimage()->create(['g_image' => $imgName]);
                }
            }
            $input['brand_id'] = $request->productBrand;
            $input['tag_key'] = json_encode($request->ProductTag);
            $input['image_id'] = $getID['id']; // adding primary key id in foreign key table for product table

            Product::create($input);

            return redirect()->back()->with('message', 'Record added !');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
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


        $editlist = Product::findOrFail($id);
        $colorVal = json_decode($editlist->color);
        $thumbnailImage = $editlist->thumbImage()->first();
        $galleryImage = $thumbnailImage->galleryimage()->get();
        return view('backend.products.form', compact('editlist', 'galleryImage','colorVal'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProductRequest $request, string $id)
    {

        //
        try {

            $updateData = Product::findOrFail($id);
            $input['product_name'] = $request->product_name;
            $input['slug'] = Str::slug($request->product_name);
            $input['unit'] = $request->unit;
            $input['price'] = $request->price;
            $input['refundable'] = isset($request->refundable[0]) ? 1 : 0;
            $input['description'] = $request->description;
            $input['featured'] = isset($request->featured[0]) ? 1 : 0;
            $input['today_deal'] = isset($request->today_deal[0]) ? 1 : 0;
            $input['flash_title'] = $request->flash_title;
            $input['discount'] = $request->discount;
            $input['discount_type'] = $request->discount_type;
            $input['discount_type'] = $request->discount_type;
            $input['category_key'] = json_encode($request->category_key);
            $input['sales'] = isset($request->sales[0]) ? 1 : 0;
            $input['color'] = json_encode($request->color);


            // creating new Thumbnail images 
            $getImage = Image::findOrFail($updateData->image_id);
            if ($request->hasFile('t_image')) {
                if (file_exists(public_path("uploads/" . $getImage->t_image))) {
                    unlink("uploads/" . $getImage->t_image);
                }
                $input['t_image'] = $request->file('t_image')->store('thumbnail', 'uploads');
                $getID = $getImage->update($input);
            }

            // create new collection of gallery with thumbnail images id
            if (!empty($request->g_image)) {
                foreach ($request->g_image as $img) {
                    $imgName = $img->store('gallery', 'uploads');
                    ($getID ?? $getImage)->galleryimage()->create(['g_image' => $imgName]);
                }
            }
            $input['brand_id'] = $request->productBrand;
            $input['tag_key'] = json_encode($request->ProductTag);
            $input['image_id'] = ($getID->id ?? $updateData->image_id); // adding primary key id in foreign key table for product table


            $updateData->update($input);

            return redirect()->back()->with('message', 'Record Updated !');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $deleteProduct = Product::findOrFail($id);

        $thumbnailImage = $deleteProduct->thumbImage()->first();

        $gallery = $thumbnailImage->galleryimage()->get();

        foreach ($gallery as $list) {
            unlink("uploads/" . $list->g_image);
            $list->delete();
        }
        unlink("uploads/" . $thumbnailImage->t_image);
        $thumbnailImage->delete();

        $deleteProduct->delete();
        return redirect()->back()->with('message', 'Record deleted successfully !');
    }

    public function delete_gallery($id)
    {

        $deletegallery = Gallery::findOrFail($id);

        unlink('uploads/' . $deletegallery->g_image);
        $deletegallery->delete();
        return "Gallery Image deleted successfully";
    }

    public function status(Request $request)
    {
        $update = Product::find($request->id);
        $input['status'] = $update->status ? 0 : 1;

        $update->update($input);
        return "Status Upadeted !";
    }
}
