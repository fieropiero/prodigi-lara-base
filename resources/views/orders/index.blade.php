@extends('layouts.index')

@section('content')
    <a href="{{route('orders.create')}}" class="btn btn-primary">Add Order</a>
@endsection

@section('table_head')
    <th>Code</th><th>Total</th>
@endsection

@section('table_body')
    @foreach($orders as $order)
        <tr>
            <td>{{$order->code}}</td>
            <td>{{$order->total}}</td>
        </tr>
    @endforeach
@endsection