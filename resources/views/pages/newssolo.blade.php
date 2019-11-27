@extends('layouts.master')

@section('content')
<section id="news_solo_header">
<div class="img_crop">
<img src="/storage/{{$solo->img}}" alt="">
</div>
<div class="container">
<div class="row">
<div class="green_header_uchast">
<h1>{{$solo -> title}}</h1>
</div>
</div>
</div>
</section>
<div class="container">
<div class="row">
<div class="text_news_solo">
<p>{!! $solo-> body !!}</p>
</div>
</div>
</div>

@endsection