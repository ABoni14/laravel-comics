@extends('layouts.app')
@section('content')
<main>
    <div class="container ab-boxes">
        @foreach (config("card") as $box)
        <div class="product-box">
            <img src="{{$box["img"]}}" alt="{{$box["title"]}}">
            <h3>{{$box["title"]}}</h3>
        </div> 
        @endforeach
        
    </div>

    <div class="container ab-button-main">
      <button><a href="#">LOAD MORE</a></button>
    </div>
</main>
@endsection