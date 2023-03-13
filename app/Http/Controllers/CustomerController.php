<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        $customers = Customer::all();
        return view('customers.index', ['customers'=>$customers,]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('customers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            "firstname"=>"required",
            "lastname"=>"required"
        ]);
        Customer::create([
            "firstname"=>$validated['firstname'],
            "lastname"=>$validated['lastname'],
            
        ]);
        return redirect(route('customers.index'))->with('message', 'Customer created succesfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Customer $customer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Customer $customer)
    {
        return view('customers.edit',["customer"=>$customer]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Customer $customer)
    {
        $validated = $request->validate([
            "firstname"=>'required',
            "lastname"=>'required'
        ]);

        $customer->firstname = $validated['firstname'];
        $customer->lastname = $validated['lastname'];
        $customer->save();
        return redirect(route('customers.index'))->with('message', 'Customer modified succesfully');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Customer $customer)
    {
        $customer->delete();
        return redirect(route('customers.index'))->with('message', 'Customer deleted successfully');
    }
}
