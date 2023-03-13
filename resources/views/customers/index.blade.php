@extends('layouts.app')

@section('content')
    <a href="{{route('customers.create')}}" class="btn btn-primary">Add Customer</a>
    
    @if(session('message'))
    <div class="alert alert-success mt-3" role="alert">
        {{session('message')}}
    </div>
    @endif

@endsection

@section('table_head')
    <th>First Name</th><th>Last Name</th><th></th><th></th>
@endsection

@section('table_body')
    @foreach($customers as $customer)
        <tr>
            <td>{{$customer->firstname}}</td>
            <td>{{$customer->lastname}}</td>
            <td><a href="{{route('customers.edit', $customer)}}" class="btn btn-success">Modify</a></td>
            <td>
                <form method="post" action="{{route('customers.destroy', $customer)}}">
                @method('delete')
                @csrf    
                <button class="btn btn-danger confirm_delete">Cancella</button>
                </form>
            </td>
        </tr>
    @endforeach
@endsection