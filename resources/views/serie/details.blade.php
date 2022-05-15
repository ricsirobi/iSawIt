@extends('layouts.main')
@section('content')
    <style>
        .list-group {
            max-height: 600px;
            margin-bottom: 10px;
            overflow: scroll;
            -webkit-overflow-scrolling: touch;
        }

    </style>

    <h1 class='disply-1'> {{ $serie->title }} - {{ $serie->season }}. {{ __('season') }}</h1>
    <p> <a class="btn btn-sm btn-secondary" href="{{ route('topic.show.serie', $serie->topic) }}">{{ __('series') }},
            {{ $serie->topic->name }} </a> {{ $serie->created_at->diffForHumans() }}
    </p>
    <form action="{{ route('serie.edit', $serie) }}" method="get">
        @csrf
        <button name="seen" value="1" class="btn btn-outline-warning"> {{ __('Edit') }}</button>
    </form>
    <div class='row'>
        <div class='col-lg-6 col-md-6 col-12'>
            <div class='card border-0'>
                <div class='card-body'>
                    <div class="mb-3">
                        <img src='{{ $serie->cover_image }}' width="500" height="auto" />
                    </div>
                    <div class="col-md-12 form-group">
                    </div>
                </div>
            </div>
        </div>
        <div class='col-lg-6 col-md-6 col-12 border-0'>
            <div class='card border-0'>
                <div vlass='card-body'>
                    <div class="panel panel-primary" id="result_panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">Episodes</h3>
                        </div>
                        <div class="panel-body">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <form action="" method="">
                                        <div class='d-flex align-items-center mb-4'>
                                            <div class=""> 1</div>
                                            <strong class="ms-auto"> Pilot </strong>
                                            <div class="ms-auto"> 80 min </div>
                                            <input type="submit" class="btn btn-primary ms-auto" value="I already seen it">
                                        </div>
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
