@extends('plantilla')

@section('seccion')
    <h1>Lugares de Recreacion</h1>

    @foreach ($equipo as $item)
        <a href=" {{ route('recreacion', $item) }} "> {{$item}} </a>
    @endforeach
    <!-- La idea es traer el nombre de usuario -->

    @if(empty($nombre))
    <p>la variable existe</p>
    @endif

@endsection