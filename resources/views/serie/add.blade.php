@extends('layouts.main')
@section('content')
    <form action='{{ route('serie.add') }}' method='post' enctype="multipart/form-data">
        @csrf
        <x-forms.title_button name="Add serie"/>
        <div class='row'>
            <div class='col-lg-8 col-md-6 col-12'>
                <div class='card'>
                <div class='card-body'>
                    <div class="mb-3">
                       <x-forms.input name="title" label="{{__('Title')}}"/>
                       <x-forms.input name="season" type="number" label="{{__('Season')}}"/>
                       <x-forms.input name="episode_count" type="number" label="{{__('Serie episode count')}}"/> 
                    </div>
                    <div class="col-md-12 form-group">
                    </div>
                </div>
            </div>
            </div>
            <div class='col-lg-4 col-md-6 col-12'>
                <div class='card'>
                <div vlass='card-body'>
                    <x-forms.topic_select/>
                    <x-forms.cover_file/>
                </div>
            </div>
            </div>
        </div>
    </div>
    </form>
@endsection
