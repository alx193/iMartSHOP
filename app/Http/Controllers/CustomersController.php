<?php

namespace App\Http\Controllers;

use App\Models\Customers;
use Illuminate\Http\Request;

class CustomersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customers = Customers::latest()->paginate(10);

        return view('customers.index', compact('customers'))
            ->with('i', (request()->input('page', 1) -1) * 10);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('customers.create');
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
            'email'=>'required',
            'password'=>'required',
            'full_name'=>'required',
            'billing_address'=>'required',
            'shipping_address'=>'required',
            'country'=>'required',
            'phone'=>'required',
        ]);

        $customer = new Customers();
        $customer->email = $request->email;
        $customer->password = $request->password;
        $customer->full_name = $request->full_name;
        $customer->billing_address = $request->billing_address;
        $customer->shipping_address = $request->shipping_address;
        $customer->country = $request->country;
        $customer->phone = $request->phone;
        $customer->save();

        return redirect()->route('customers.index')
                        ->with('success', 'Customer created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Customers  $customers
     * @return \Illuminate\Http\Response
     */
    public function show(Customers $customer)
    {
        return view('customers.show', compact('customer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Customers  $customers
     * @return \Illuminate\Http\Response
     */
    public function edit(Customers $customer)
    {
        return view('customers.edit', compact('customer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Customers  $customers
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Customers $customer)
    {
        $request->validate ([
            'email'=>'required',
            'password'=>'required',
            'full_name'=>'required',
            'billing_address'=>'required',
            'shipping_address'=>'required',
            'country'=>'required',
            'phone'=>'required',
        ]);

        $customer->update($request->all());

        return redirect()->route('customers.index')
                        ->with('success', 'Customer updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Customers  $customers
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customers $customer)
    {
        $customer->delete();

        return redirect()->route('customers.index')
                        ->with('success', 'Customer deleted successfully!');
    }
}
