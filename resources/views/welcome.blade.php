@extends('layouts.app')

@section('content')

<div class="main_container">
    <div class="jumbo">
        <div class="current_series">current series</div>
    </div>
    
    <div class="container_comics">
        
        @foreach($series as $serie)
        <div class="cont_comics">

            <div class="image_wrap">
                <img class="card" src="{{ $serie['thumb'] }}" alt="">
                <h5 class="card_title">{{ $serie['title'] }}</h5>

            </div>
            

        </div>
        @endforeach
        <div class="load">Load More</div>
    </div>
</div>

@endsection