@extends('layouts.main')
@section('content')
    <form action='{{ route('serie.edit',$serie) }}' method='post' enctype="multipart/form-data">
        @csrf
        <x-forms.title_button name="Edit {{$serie->title}} season {{$serie->season}}"/>
        <div class='row'>
            <div class='col-lg-8 col-md-6 col-12'>
                <div class='card'>
                <div class='card-body'>
                    <div class="mb-3">
                       <x-forms.input name="title" :value="$serie->title " label="{{__('Title')}}"/>
                       <x-forms.input name="season" :value="$serie->season" type="number" label="{{__('Season')}}"/>
                       <x-forms.input name="episode_count" :value="$serie->episode_count" type="number" label="{{__('Serie episode count')}}"/> 
                    </div>
                    <div class="col-md-12 form-group">
                    </div>
                </div>
            </div>
            </div>
            <div class='col-lg-4 col-md-6 col-12'>
                <div class='card'>
                <div vlass='card-body'>
                    <div class="mb-3">
                        <label for='{{ __('Category') }}'> {{ __('Category') }} </label>
                        <select class='form-control {{ $errors->has('topic_id') ? 'is-invalid' : '' }}' name='topic_id'>
                            <option value='' selected disabled> {{ __('Please choose') }} </option>
                            @foreach ($topics as $topic)
                                <option value='{{ $topic->id }}' {{ old('topic_id') == $topic->id ? 'selected' : '' }} {{ $serie->topic == $topic ? 'selected' : '' }}>
                                    {{ $topic->name }}
                                </option>
                            @endforeach
                        </select>
                        @if ($errors->has('topic_id'))
                            <p class='invalid-feedback'> {{ $errors->first('topic_id') }} </p>
                        @endif
                    </div>
                    <x-forms.cover_file/>
                </div>
            </div>
            </div>
        </div>
    </div>
    </form>
@endsection
