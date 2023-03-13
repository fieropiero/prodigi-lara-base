@extends('layouts.app')

@include('partials.form-errors')

@section('content')
<div class='container'>
    <form method="post" action="{{route('customers.store')}}">
    @csrf
    <div class="mb-3">
        <label for="firstname" class="form-label">Firstname</label>
        <input type="text" class="form-control" id="firstname" name="firstname" placeholder="Type firstname" value="{{old('firstname')}}">
    </div>
        <div class="mb-3">
            <label for="lastname" class="form-label">Lastname</label>
            <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Type lastname" value="{{old('lastname')}}">
        </div>
        <button class="btn btn-primary">Confirm</button>
    </form>
</div>
@endsection