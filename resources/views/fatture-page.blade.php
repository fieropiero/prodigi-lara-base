@extends('layouts.app')

@section('title', $titolo)

@php
$fatture=["Fattura1","Fattura2"];
@endphp

@section('content')
<ol>
    @foreach($fatture as $fattura)
        <li>{{$fattura}}</li>
    @endforeach
</ol>
@endsection