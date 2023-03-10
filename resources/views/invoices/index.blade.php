@extends('layouts.index')

@section('content')
    <a href="{{route('invoices.create')}}" class="btn btn-primary">Add Invoice</a>
@endsection

@section('table_head')
    <th>Code</th><th>Total</th><th>Payments</th>
@endsection

@section('table_body')
    @foreach($invoices as $invoice)
        <tr>
            <td>{{$invoice->code}}</td>
            <td>{{$invoice->total}}</td>
            <td>{{$invoice->payments}}</td>
        </tr>
    @endforeach
@endsection