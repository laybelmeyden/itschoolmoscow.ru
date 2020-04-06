@extends('layouts.master')

@section('content')

<section id="all_news">
<div class="container">
<div class="row">
<h1 class="title_h1">новости</h1>
@foreach ($mainnews as $mainnew)
<div class="col s12 l4">
<div class="card card_all">
        <div class="card-image card_img_news">
          <img src="/storage/{{ $mainnew->img }}">
        </div>
        <div class="card-content">
        <p>{{$mainnew->date}}</p>
        <h2>{{$mainnew->title}}</h2>
        <h3>{{$mainnew->pretitle}}</h3>
          <a href="/newssolo{{ $mainnew->id }}" class="waves-effect waves-light btn news_btn_6">ЧИТАТЬ<img src="assets/img/right-arrow.png" class="btn_news" alt=""></a>
        </div>
      </div> 
</div>
@endforeach
<div class="col l12 non_nav">
  {{$mainnews->links()}}
</div>
</div>
</div>
</section>
@endsection