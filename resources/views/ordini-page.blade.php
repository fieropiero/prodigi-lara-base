@extends('layouts.app')

@section('title', $titolo)

@php
$ordini=["Ordine1","Ordine2","Ordine3"];
@endphp

@section('content')
<ul>
    @foreach($ordini as $ordine)
        <li>{{$ordine}}</li>
    @endforeach
</ul>
@endsection