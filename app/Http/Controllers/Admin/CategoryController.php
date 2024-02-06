<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;

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
            $input = resolve($this->request)->all();

            $update = Category::find($id);

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
