<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $invoices = Invoice::all();
        return view('invoices.index', ['invoices'=>$invoices,]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('invoices.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            "code"=>"required",
            "total"=>"required",
            "payments"=>"required"
        ]);
        Invoice::create([
            "code"=>$validated['code'],
            "total"=>$validated['total'],
            "payments"=>$validated['payments'],
            
        ]);
        return redirect(route('invoices.index'))->with('message', 'Invoice created succesfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Invoice $invoice)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Invoice $invoice)
    {
        return view('invoices.edit', ["invoice"=>$invoice]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Invoice $invoice)
    {
        $validated = $request->validate([
            "code"=>'required',
            "total"=>'required',
            "payments"=>'required'
        ]);

        $invoice->code = $validated['code'];
        $invoice->total = $validated['total'];
        $invoice->payments = $validated['payments'];
        $invoice->save();
        return redirect(route('invoices.index'))->with('message', 'Invoice modified succesfully');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Invoice $invoice)
    {
        $invoice->delete();
        return redirect(route('invoices.index'))->with('message', 'Invoice deleted successfully');
   }
}
