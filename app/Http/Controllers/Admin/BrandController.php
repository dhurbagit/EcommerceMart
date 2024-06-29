<?php

namespace App\Http\Controllers\Admin;

use App\Models\Brand;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Requests\BrandRequest;
use App\Http\Controllers\Controller;

class BrandController extends Controller
{
    protected string $request = BrandRequest::class;

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
        //
        return view('backend.brand.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        try {

            $input = resolve($this->request)->all();
            $input['slug'] = Str::slug($request->b_title);

            Brand::create($input);

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
        $data = Brand::findOrFail($id);
        return view('backend.brand.form',  compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        try {
            $update = Brand::findOrFail($id);
            $input = resolve($this->request)->all();
            $input['slug'] = Str::slug($request->b_title);
           

            $update->update($input);

            return redirect()->route('brand.create')->with('message', 'Record Updated !');
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
        $delete = Brand::findOrFail($id);
        $delete->delete();
        return redirect()->back()->with('message', 'Record deleted successfully !');
    }
}
