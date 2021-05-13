@extends('layouts.app')
@section('main')
<section id="comics">
  <div class="container">
    <div class="title-section">
      <h2 class="uppercase"> current series</h2>
    </div>
    <div class="comics-wrapper">
      @foreach ($comics as $index => $comic)
      <a class="card" href="{{route('detail', ['id' => $index])}}">
        <div >
          <div class="card-img">
            <img src="{{ $comic['thumb']}}" alt="">
          </div>
          <div class="card-title uppercase">
            <p> {{ $comic['series'] }}</p>
          </div>
        </div>
      </a>
      @endforeach
    </div>
  </div>
  <div class="button">
    <div class="btn-load">
      <a class="uppercase" href="#"> load more</a>
    </div>
  </div>
  <div class="shop-link">
    <div class="card-shop">
      <img src="/img/buy-comics-digital-comics.png" alt="img DC">
      <a class="uppercase" href="#">digital comics</a>
    </div>
    <div class="card-shop">
      <img src="/img/buy-comics-merchandise.png" alt="img DC">
      <a class="uppercase" href="#">DC merchandise</a>
    </div>
    <div class="card-shop">
      <img src="/img/buy-comics-subscriptions.png" alt="img DC">
      <a class="uppercase" href="#">subscription</a>
    </div>
    <div class="card-shop">
      <img src="/img/buy-comics-shop-locator.png" alt="img DC">
      <a class="uppercase" href="#">comic shop locator</a>
    </div>
    <div class="card-shop">
      <img src="/img/buy-dc-power-visa.svg" alt="img DC">
      <a class="uppercase" href="#">dc power visa</a>
    </div>
  </div>
</section>
@endsection
