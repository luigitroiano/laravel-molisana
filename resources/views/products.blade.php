@extends('layouts.app')

@section('main')
  <h1>Products</h1>
  

  @foreach($data as $pasta)
  <img src="{{ $pasta['src'] }}" alt="">

  <a href="#">
  <h3>{{ $pasta['titolo'] }}</h3>
  </a>
  @endforeach
@endsection