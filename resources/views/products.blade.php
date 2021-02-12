@extends('layouts.app')

@section('title')
La Molisana | Products
@endsection

@section('main')
<main>
  <h2>LE LUNGHE</h2>
  <div class="container_cards">
    @foreach($data as $pasta)
    @if ($pasta['tipo'] === 'lunga')

    <img src="{{ $pasta['src'] }}" alt="">
    
    @endif
    @endforeach
  </div>

  <h2>LE CORTE</h2>
  <div class="container_cards">
    @foreach($data as $pasta)
    @if ($pasta['tipo'] === 'corta')

    <img src="{{ $pasta['src'] }}" alt="">
    
    @endif
    @endforeach
  </div>
  <h2>LE CORTISSIME</h2>
  <div class="container_cards">
    @foreach($data as $pasta)
    @if ($pasta['tipo'] === 'cortissima')

    <img src="{{ $pasta['src'] }}" alt="">

    @endif
    @endforeach
  </div>
  @endsection
</main>