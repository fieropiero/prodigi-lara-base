@extends('layouts.app')

@section('content')
    <a href="{{route('invoices.create')}}" class="btn btn-primary">Add Invoice</a>
        
    @if(session('message'))
    <div class="alert alert-success mt-3" role="alert">
        {{session('message')}}
    </div>
    @endif

@endsection

@section('table_head')
    <th>Code</th><th>Total</th><th>Payments</th><th></th><th></th>
@endsection

@section('table_body')
    @foreach($invoices as $invoice)
        <tr>
            <td>{{$invoice->code}}</td>
            <td>{{$invoice->total}}</td>
            <td>{{$invoice->payments}}</td>
            <td><a href="{{route('invoices.edit', $invoice)}}" class="btn btn-success">Modify</a></td>
            <td>
                <form method="post" action="{{route('invoices.destroy', $invoice)}}">
                @method('delete')
                @csrf    
                <button class="btn btn-danger confirm_delete">Cancella</button>
                </form>
            </td>
        </tr>
    @endforeach
@endsection