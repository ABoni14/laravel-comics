<section class="bluebar">
  <div class="container">
    @foreach (config("bluebar") as $icon)
    <div class="box">
      <img src="{{$icon["img"]}}" alt="{{$icon["text"]}}">
      <h4>{{$icon["text"]}}</h4>
    </div>
    @endforeach
  </div>
</section>