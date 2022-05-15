@extends('layouts.main')
@section('content')
    <h1 class='disply-1'> {{ $film->title }} </h1>
    <p> <a class="btn btn-sm btn-secondary" href="{{ route('topic.show.film', $film->topic) }}">{{ __('Film') }},
            {{ $film->topic->name }} </a> {{ $film->created_at->diffForHumans() }}
    </p>
    <p class='fw-bold'> {{ $film->minute_long }} {{ __('minute long') }}</p>
    <p>
        {{ __('Users seen') }}: {{ count($film->views) }} {{!count($film->views->where('user_id', '=', Auth::user()->id)) ? "" : "(with you)"}} 
    </p>
    <p>
    <div class="mb-3">
        <form action="{{ route('film.seen', $film) }}" method="post">
            @csrf
            <button name="seen" value="1" class="btn  
            {{!count($film->views->where('user_id', '=', Auth::user()->id)) ? " btn-outline-success" : " btn-outline-danger"}} "> 
            {{!count($film->views->where('user_id', '=', Auth::user()->id)) ? "I already seen it" : "I haven't seen it yet"}} </button>
        </form>

    <form action="{{ route('film.edit', $film) }}" method="get">
        @csrf
        <button name="seen" value="1" class="btn btn-outline-warning"> {{ __('Edit') }}</button>
    </form>
</div>
    </p>
    <img src='{{ $film->cover_image }}' alt="{{$film->title}}" width="500" height="auto" />
@endsection
