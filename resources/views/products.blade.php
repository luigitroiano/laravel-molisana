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

    <div class="container_image">
      <img class="image" src="{{ $pasta['src'] }}" alt="">
      <div class="overlay">
        <div class="overlay_content">
          <img class="overlay_image" src="{{ asset('/img/icon.svg') }}" alt="">
          <a href="#">
            <h3>{{ $pasta['titolo'] }}</h3>
          </a>
        </div>
      </div>
    </div>

    @endif
    @endforeach
  </div>

  <h2>LE CORTE</h2>
  <div class="container_cards">
    @foreach($data as $pasta)
    @if ($pasta['tipo'] === 'corta')

    <div class="container_image">
      <img class="image" src="{{ $pasta['src'] }}" alt="">
      <div class="overlay">
        <div class="overlay_content">
          <img class="overlay_image" src="{{ asset('/img/icon.svg') }}" alt="">
          <a href="#">
            <h3>{{ $pasta['titolo'] }}</h3>
          </a>
        </div>
      </div>
    </div>

    @endif
    @endforeach
  </div>

  <h2>LE CORTISSIME</h2>
  <div class="container_cards">
    @foreach($data as $pasta)
    @if ($pasta['tipo'] === 'cortissima')

    <div class="container_image">
      <img class="image" src="{{ $pasta['src'] }}" alt="">
      <div class="overlay">
        <div class="overlay_content">
          <img class="overlay_image" src="{{ asset('/img/icon.svg') }}" alt="">
          <a href="#">
            <h3>{{ $pasta['titolo'] }}</h3>
          </a>
        </div>
      </div>
    </div>

    @endif
    @endforeach
  </div>
  @endsection
</main>