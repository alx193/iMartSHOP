<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Cart;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
     public function index()
    {
        $products = Product::latest()->paginate(10);

        return view('products.index',compact('products'))
            ->with('i', (request()->input('page', 1) -1) * 10);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

       // dd('start');
        $request->validate ([
             'Name' => 'required',
             'Price' => 'required',
             'Weight' => 'required',
             'Description' => 'required',
             'Category' => 'required',
             'Stock' => 'required',
        ]);
            
        $product = new Product();
        $product->Name = $request->Name;
        $product->Price = $request->Price;
        $product->Weight = $request->Weight;
        $product->Description = $request->Description;
        $product->Category = $request->Category;
        $product->Stock = $request->Stock;
        //$game->publisher = $request->publisher;
      //  $game->releasedate = $request->releasedate;
        //$game->image = $imageName;
        $product->save();

     //   dd("sunt un produs", $product);
      //  dd('aaa');
            return redirect()->route('products.index')
                            ->with('success', "Product created successfully!");  
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        // dd('aici');
        $request->validate ([
            // 'id'   => 'required',
            'Name' => 'required',
            'Price' => 'required',
            'Weight' => 'required',
            'Description' => 'required',
            'Category' => 'required',
            // 'CREATED_AT' => 'required',
            'Stock' => 'required',
        ]);
        // dd('am trecut de validare');
        $product->update($request->all());
        // dd('am trecut de update :)');
        return redirect()->route('products.index')
                        ->with('success', 'Product updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('products.index')
                        ->with('success', 'Product deleted successfully!');
    }
}
