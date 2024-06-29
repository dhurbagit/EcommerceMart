<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;

class CategoryController extends Controller
{

    protected string $request = CategoryRequest::class;

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

        dd('index me');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('backend.category.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

        try {

            $input = resolve($this->request)->all();
            
            $input['slug'] = Str::slug($request->category_title);
            if ($request->hasFile('image')) {
                $input['image'] = $request->file('image')->store('category_images', 'uploads');
            }
            if ($request->hasFile('icon')) {
                $input['icon'] = $request->file('icon')->store('category_icons', 'uploads');
            }
           

            Category::create($input);

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
        dd('show me');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $data = Category::findOrFail($id);
        return view('backend.category.form', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //

        try {
            $update = Category::find($id);
            $input = resolve($this->request)->all();
          
            $input['slug'] = Str::slug($request->category_title);
           
            if ($request->hasFile('image')) {
                if (file_exists(public_path("uploads/" . $update->image))) {
                    unlink("uploads/" . $update->image);
                }
                $input['image'] = $request->file('image')->store('category_images', 'uploads');
            }
            if ($request->hasFile('icon')) {
                if (file_exists(public_path("uploads/" . $update->icon))) {
                    unlink("uploads/" . $update->icon);
                }
                $input['icon'] = $request->file('icon')->store('category_icons', 'uploads');
            }

            $update->update($input);

            return redirect()->route('categories.create')->with('message', 'Record Updated !');
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

        // dd($id);

        $delete = Category::find($id);

        $subcategory = $delete->subCategory()->get();
        
        foreach ($subcategory as $list) {
            $list->delete();
           foreach($list->subCategory()->get() as $rec){
            $rec->delete();
           }
        }

        $delete->delete();

        return redirect()->back()->with('message', 'Record deleted successfully !');

        // dd($subcategory);
    }
}
