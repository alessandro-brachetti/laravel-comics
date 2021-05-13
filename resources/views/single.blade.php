@extends('layouts.app')
@section('main')
  <section id="comic-thumb">
    <div class="small-container">
      <div class="comic-thumb-container">
        <div class="comic-thumb-wrapper">
          <span class=" comic-type uppercase"> {{ $comic['type'] }}</span>
          <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
          <span class="comic-gallery uppercase">View gallery</span>
        </div>
      </div>
    </div>
  </section>
  <section id="comic-details">
    <div class="small-container">
      <div class="comic-info-wrapper">
        <div class="comic-info">
          <h1 class="uppercase">{{ $comic['title']}}</h1>
          <div class="comic-availability-wrapper">
            <div class="price-wrapper">
              <div class="price">
                <span>U.S. Price:</span>
                <span class="comic-price">{{ $comic['price'] }}</span>
              </div>
              <span class="uppercase">Available</span>
            </div>
            <div class="check-availability">
              <span>Check Availability ▾</span>
            </div>
          </div>
          <p class="comic-description">{{ $comic['description']}}</p>
        </div>
        <div class="comic-advertisement">
          <h4 class="uppercase">advertisement</h4>
          <div class="img-advertisement">
            <img src="/img/spot.jpg" alt="superman image">
          </div>
        </div>
      </div>


    </div>
  </section>
  <section id="comic-specs">
    <div class="small-container">
      <div class="talent">
        <h2>Talent</h2>
        <ul>
          <li>
            <span>Art by:</span>
            <span>
              @foreach ($comic['artists'] as $artist_name)
                <a href="#">{{ $artist_name }}</a>
                @if( !$loop->last)
                  ,
                @endif
              @endforeach
            </span>
          </li>
          <li>
            <span>Written by:</span>
            <span>
              @foreach ($comic['writers'] as $writer_name)
              <a href="#">{{ $writer_name }}</a>
              @if( !$loop->last)
                ,
              @endif
              @endforeach
            </span>
          </li>
        </ul>
      </div>
      <div class="specs">
        <h2>Specs</h2>
        <ul>
          <li>
            <span>Series:</span>
            <span class="comic-series uppercase"> {{ $comic['series'] }}</span>
          </li>
          <li>
            <span>U.S. Price:</span>
            <span>{{ $comic['price'] }}</span>
          </li>
          <li>
            <span>On Sale Date:</span>
            <span>{{ DateTime::createFromFormat('Y-m-d', $comic['sale_date'])->format('M d Y') }}</span>
          </li>
        </ul>
      </div>
    </div>
  </section>
  <section id="comic-utilities">
    <div class="small-container">
      <div class="icon-box-container">
        <div class="icon-box">
          <a href="#" class="uppercase">
            <span class="icon-box-text">Digital Comics</span>
            <span class="icon-box-image-1"></span>
          </a>
        </div>
        <div class="icon-box">
          <a href="#" class="uppercase">
            <span class="icon-box-text">Shop DC</span>
            <span class="icon-box-image-2"></span>
          </a>
        </div>
        <div class="icon-box">
          <a href="#" class="uppercase">
            <span class="icon-box-text">Comic Shop Locator</span>
            <span class="icon-box-image-3"></span>
          </a>
        </div>
        <div class="icon-box">
          <a href="#" class="uppercase">
            <span class="icon-box-text">Subscriptions</span>
            <span class="icon-box-image-4"></span>
          </a>
        </div>
      </div>
    </div>
  </section>
@endsection
