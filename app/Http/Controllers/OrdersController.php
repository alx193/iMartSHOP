<?php

namespace App\Http\Controllers;

use App\Models\Orders;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = Orders::latest()->paginate(10);

            return view('orders.index', compact('orders'))
            ->with('i', (request()->input('page', 1) * 10));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('orders.create');
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
            'customer_id'=>'required',
            'ammount'=>'required',
            'address'=>'required',
            'status'=>'required',
        ]);

        $order = new Orders();
        $order->customer_id = $request->customer_id;
        $order->ammount = $request->ammount;
        $order->address = $request->address;
        $order->status = $request->status;
        $order->save();

        return redirect()->route('orders.index')
                        ->with('success', 'Order created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Orders  $orders
     * @return \Illuminate\Http\Response
     */
    public function show(Orders $order)
    {
        return view('orders.show', compact('order'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Orders  $orders
     * @return \Illuminate\Http\Response
     */
    public function edit(Orders $order)
    {
        return view('orders.edit', compact('order'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Orders  $orders
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Orders $order)
    {
        $request->validate ([
            'customer_id'=>'required',
            'ammount'=>'required',
            'address'=>'required',
            'status'=>'required',
        ]);

        $order->update($request->all());

        return redirect()->route('orders.index')
                        ->with('success', 'Order updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Orders  $orders
     * @return \Illuminate\Http\Response
     */
    public function destroy(Orders $order)
    {
        $order->delete();

        return redirect()->route('orders.index')
                        ->with('success', 'Order delete successfullt!');
    }
}
