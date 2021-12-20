@extends('layouts.app')

@section('page-title', 'tv')

@section('custom-css')
<link rel="stylesheet" href="{{asset('css/layout.css')}}">
@endsection


@section('content')

<div class="container">
    <div class="comic">
        <div class="poster">
            <img src="{{$series['thumb']}}" alt="{{$series['title']}}">
        </div>
        <p>{{$comic['series']}}</p>
    </div>
</div>





@endsection