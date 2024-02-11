<?php

namespace App\Http\Controllers\Admin;

use App\Models\Tag;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Requests\TagRequest;
use App\Http\Controllers\Controller;

class TagController extends Controller
{
    protected string $request = TagRequest::class;
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
        return view('backend.tag.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        try {

            $input = resolve($this->request)->all();
            $input['slug'] = Str::slug($request->t_title);
            Tag::create($input);

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
        $data = Tag::findOrFail($id);
        return view('backend.tag.form',  compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        try {
            $update = Tag::findOrFail($id);
            $input = resolve($this->request)->all();
            $input['slug'] = Str::slug($request->t_title);
           

            $update->update($input);
           
            return redirect()->route('tag.create')->with('message', 'Record Updated !');
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
        $delete = Tag::findOrFail($id);
        $delete->delete();
        return redirect()->back()->with('message', 'Record deleted successfully !');
    }
}
