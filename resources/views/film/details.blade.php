@extends('layouts.main')
@section('content')
<h1 class='disply-1'> {{$film->title}} </h1>
<p> {{$film->topic ->name}} | {{ $film->created_at-> diffForHumans() }}</p>
<p class='fw-bold'> {{ $film-> minute_long}} {{ __('minute long')}}</p>
<img src='{{ $film-> cover_image}}' width="500" height="auto"/>  

@endsection