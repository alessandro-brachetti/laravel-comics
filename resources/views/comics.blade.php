<div class="comics-wrapper">
  @foreach ($comics as $comic)
  <div class="card">
    <div class="card-img">
      <img src="{{ $comic['thumb']}}" alt="">
    </div>
    <div class="card-title uppercase">
      <p> {{ $comic['series'] }}</p>
    </div>
  </div>
  @endforeach
</div>
