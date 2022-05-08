@extends('layouts.main')
@section('content')
    <form action='{{ route('film.edit',$film) }}' method='post' enctype="multipart/form-data">
        @csrf
        <div class='d-flex align-items-center mb-4'>
            <h3 class='display-3'> {{ __('Editing film: ') }} {{$film->title}} </h3>
        <input type="submit" class="btn btn-primary ms-auto" name="saveFilm" value=" {{ __('Save film: ') }} {{"$film->title"}}">
        </div>
        <div class='row'>
            <div class='col-lg-8 col-md-6 col-12'>
                <div class='card'>
                <div class='card-body'>
                    <div class="mb-3">
                       <x-forms.input name="title" label="{{__('Title')}}" :value="$film->title"/>
                        <div class="mb-3">
                            <label for='length'> {{ __('Film length') }} </label>
                            <input type="number" placeholder=" {{ __('Long (Minute)') }}"
                                class="form-control {{ $errors->has('minute_long') ? 'is-invalid' : '' }}" name="minute_long"
                                value="{{ old('minute_long', $film->minute_long) }}">
                            @if ($errors->has('minute_long'))
                                <p class='invalid-feedback'> {{ $errors->first('minute_long') }} </p>
                            @endif
                        </div>
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
                                <option value='{{ $topic->id }}' {{ old('topic_id', $film->topic_id) == $topic->id ? 'selected' : '' }}>
                                    {{ $topic->name }}
                                </option>
                            @endforeach
                        </select>
                        @if ($errors->has('topic_id'))
                            <p class='invalid-feedback'> {{ $errors->first('topic_id') }} </p>
                        @endif
                    </div>
                    <div class="mb-3">
                        <label for='cover'> {{ __('Cover image link') }} </label>
                        <input type="file" placeholder="{{ __('Cover image link') }}"
                            class="form-control {{ $errors->has('cover') ? 'is-invalid' : '' }}" name="cover"
                            value="{{ old('cover') }}">
                        @if ($errors->has('cover'))
                            <p class='invalid-feedback'> {{ $errors->first('cover') }} </p>
                        @endif
                    </div>
                </div>
            </div>
            </div>
            
            
        </div>
    </div>
    </form>
@endsection
