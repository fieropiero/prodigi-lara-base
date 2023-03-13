<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orders = Order::all();
        return view('orders.index', ['orders'=>$orders,]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('orders.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            "code"=>"required",
            "total"=>"required",
        ]);
        Order::create([
            "code"=>$validated['code'],
            "total"=>$validated['total'],
            
        ]);
        return redirect(route('orders.index'))->with('message', 'Order created succesfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $order)
    {
        return view('orders.edit',["order"=>$order]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Order $order)
    {
        $validated = $request->validate([
            "code"=>'required',
            "total"=>'required'
        ]);

        $order->code = $validated['code'];
        $order->total = $validated['total'];
        $order->save();
        return redirect(route('orders.index'))->with('message', 'Order modified succesfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
        $order->delete();
        return redirect(route('orders.index'))->with('message', 'Order deletes successfully');
   }
}
