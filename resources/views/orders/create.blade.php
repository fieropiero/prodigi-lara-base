@extends('layouts.app')

@include('partials.form-errors')


@section('content')
<div class='container'>
    <form method="post" action="{{route('orders.store')}}">
    @csrf
    <div class="mb-3">
        <label for="code" class="form-label">Code</label>
        <input type="text" class="form-control" id="code" name="code" placeholder="Type code" value="{{old('code')}}">
    </div>
    <div class="mb-3">
        <label for="total" class="form-label">Total</label>
        <input type="text" class="form-control" id="total" name="total" placeholder="Type total" value="{{old('total')}}">
    </div>
        <button class="btn btn-primary">Confirm</button>
    </form>
</div>
@endsection