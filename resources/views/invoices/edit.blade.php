@extends('layouts.app')



@section('content')
@include('partials.form-errors')
<form method="post" action="{{route('invoices.update', $invoice)}}">
    @csrf
    @method('put')
    <div class="mb-3">
        <label for="code" class="form-label">Code</label>
        <input type="text" class="form-control" id="code" name="code" placeholder="Type code" value="{{old('code')}}">
    </div>
    <div class="mb-3">
        <label for="total" class="form-label">Total</label>
        <input type="text" class="form-control" id="total" name="total" placeholder="Type total" value="{{old('total')}}">
    </div>
    <div class="mb-3">
        <label for="payments" class="form-label">Payments</label>
        <select class="form-select" aria-label="Default select example"  id="payments" name="payments" value="{{old('payments')}}">
            <option selected>Open this select menu</option>
            <option value="Transfer">Transfer</option>
            <option value="Card">Card</option>
        </select>
    </div>
    <button class="btn btn-primary">Confirm</button>
</form>

@endsection