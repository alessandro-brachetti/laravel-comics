@foreach ($comics as $comic)
<div class="card">
  <div class="card-img">
    <img src="{{ $comic['thumb']}}" alt="">
  </div>
  <div class="card-title">
    <h3> {{ $comic['title'] }}</h3>
  </div>
</div>
@endforeach
