<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Categories::latest()->paginate(5);

        return view('categories.index',compact('categories'))
            ->with('i', (request()->input('page', 1) -1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate ([
            'Name'=>'required',
            'Description'=>'required',
            'Thumbnail'=>'required',
        ]);

        $category = new Categories();
        $category->Name = $request->Name;
        $category->Description = $request->Description;
        $category->Thumbnail = $request->Thumbnail;
        $category->save();

        return redirect()->route('categories.index')
                        ->with('success', 'Category created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Categories  $categories
     * @return \Illuminate\Http\Response
     */
    public function show(Categories $category)
    {
        return view('categories.show', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Categories  $categories
     * @return \Illuminate\Http\Response
     */
    public function edit(Categories $category)
    {
        return view('categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Categories  $categories
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Categories $category)
    {
        $request->validate ([
            'Name' => 'required',
            'Description' => 'required',
            'Thumbnail' => 'required',
        ]);
        // dd('am trecut de validare');
        $category->update($request->all());
        // dd('am trecut de update :)');
        return redirect()->route('categories.index')
                        ->with('success', 'Product updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Categories  $categories
     * @return \Illuminate\Http\Response
     */
    public function destroy(Categories $category)
    {
        $category->delete();

        return redirect()->route('categories.index')
                        ->with('success', 'Category deleted successfully!');
    }
}
