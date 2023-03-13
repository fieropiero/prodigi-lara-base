@extends('layouts.app')

@section('content')
    <a href="{{route('orders.create')}}" class="btn btn-primary">Add Order</a>
        
    @if(session('message'))
    <div class="alert alert-success mt-3" role="alert">
        {{session('message')}}
    </div>
    @endif

@endsection

@section('table_head')
    <th>Code</th><th>Total</th><th></th><th></th>
@endsection

@section('table_body')
    @foreach($orders as $order)
        <tr>
            <td>{{$order->code}}</td>
            <td>{{$order->total}}</td>
            <td><a href="{{route('orders.edit', $order)}}" class="btn btn-success">Modify</a></td>
            <td>
                <form method="post" action="{{route('orders.destroy', $order)}}">
                @method('delete')
                @csrf    
                <button class="btn btn-danger confirm_delete">Cancella</button>
                </form>
            </td>
        </tr>
    @endforeach
@endsection