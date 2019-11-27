@extends('layouts.master')

@section('content')
<section id="gallery">
<div class="container">
<div class="row" id="gallery_flex">
<h1 class="title_h1">фотогалерея</h1>
@if(!empty($galls) && $galls->count())

 @foreach ($galls as $gall)  
 @foreach (json_decode($gall->images, true) as $image)
<div class="col l4">
<div class="gallery">
<img class="materialboxed" src="{{ URL::to('/storage/'.$image)}}">
</div>
</div>
        @endforeach
        @endforeach
        @else
		    
		Изображений нет
		    
        @endif
</div>
</div>
</section>

@endsection