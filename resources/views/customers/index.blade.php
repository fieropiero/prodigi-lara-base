@extends('layouts.index')

@section('content')
    <a href="{{route('customers.create')}}" class="btn btn-primary">Add Customer</a>
@endsection

@section('table_head')
    <th>First Name</th><th>Last Name</th>
@endsection

@section('table_body')
    @foreach($customers as $customer)
        <tr>
            <td>{{$customer->firstname}}</td>
            <td>{{$customer->lastname}}</td>
        </tr>
    @endforeach
@endsection