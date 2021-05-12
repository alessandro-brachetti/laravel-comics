@extends('layouts.app')
@section('main')
<div class="jumbo" style="background-image: url('/img/jumbotron.jpg')">

</div>
<section id="comics">
  <div class="container">
    @include('comics')
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
      <img src="./img/buy-dc-power-visa.svg" alt="img DC">
      <a class="uppercase" href="#">dc power visa</a>
    </div>
  </div>
</section>
@endsection
