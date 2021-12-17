@extends('layouts.app')

@section('content')
<h1>welcome</h1>
<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sapiente iste doloremque architecto quaerat corporis aliquid, exercitationem labore consectetur reiciendis cumque!</p>

<div class="container">
    <div class="">
        @foreach($series as $serie)
        <div class="">

            <div class="">
                <img src="{{ $serie['thumb'] }}" alt="">
                <h5 class="text-center">{{ $serie['title'] }}</h5>

            </div>


        </div>
        @endforeach

    </div>
</div>

@endsection