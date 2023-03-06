@extends('layouts.app')

@section('title', $titolo)

@php
$clienti=[["Mario","Rossi"],["Luigi","Bianchi"]];
@endphp

@section('content')
<table>
    <tr><th>Nome</th><th>Cognome</th></tr>
    @foreach($clienti as $cliente)
        <tr><td>{{$cliente[0]}}</td><td>{{$cliente[1]}}</td></tr>
    @endforeach
</table>
@endsection