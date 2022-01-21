<header>
  <div class="top-header">
    <div class="container">
      <div class="contain-addict">
        <h4>DC POWER VISA<i class="far fa-registered"></i></h4>
        <h4>ADDITIONAL DC SITES<i class="fas fa-sort-down"></i></h4>
      </div>
    </div>
  </div>
  <div class="container header-contain">
    <img src="{{asset("img/dc-logo.png")}}" alt="">
    <ul class="header-nav">
      @foreach (config("nav") as $item)
      <li>
        <a class="nav-list" href="#">{{$item["text"]}}</a>
      </li>
      @endforeach
    </ul>
  </div>
</header>