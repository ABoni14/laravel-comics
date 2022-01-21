<header>
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