@extends('layouts.main')
@section('content')
    <h1 class='disply-1'> {{ $film->title }} </h1>
    <p> <a class="btn btn-sm btn-secondary" href="{{ route('topic.show.film', $film->topic) }}">{{ __('Film') }},
            {{ $film->topic->name }} </a> {{ $film->created_at->diffForHumans() }}
    </p>
    <p class='fw-bold'> {{ $film->minute_long }} {{ __('minute long') }}</p>
    <p>
        {{ __('Users seen') }}: {{ count($film->views) }}
    </p>
    <p>
    <div class="mb-3">
        <form action="{{ route('film.seen', $film) }}" method="post">
            @csrf
            <button name="seen" value="1" class="btn btn-outline-success"> {{ __('I already seen it') }}</button>
        </form>
    </div>

    <form action="{{ route('film.edit', $film) }}" method="get">
        @csrf
        <button name="seen" value="1" class="btn btn-outline-warning"> {{ __('Edit') }}</button>
    </form>
    </p>
    <img src='{{ $film->cover_image }}' width="500" height="auto" />
@endsection
