@extends('layouts.main')
@section('content')
    <form action='{{ route('episode.add') }}' method='post' enctype="multipart/form-data">
        @csrf
        <x-forms.title_button name="Add episode"/>
        <div class='row'>
            <div class='col-lg-8 col-md-6 col-12'>
                <div class='card'>
                <div class='card-body'>
                    <div class="mb-3">
                       <x-forms.input name="title" label="{{__('Title')}}"/>
                       <x-forms.input name="minute_long" type="number" label="{{__('Episode length')}}"/> 
                    </div>
                    <div class="col-md-12 form-group">
                    </div>
                </div>
            </div>
            </div>
            <div class='col-lg-4 col-md-6 col-12'> <!--Itt valamiért az xformos próbálkozás nem működött mert nem látta a $series-t-->
                <div class='card'>
                <div vlass='card-body'>
                    <div class="mb-3">
                        <label for='{{ __('Serie') }}'> {{ __('Serie') }} </label>
                        <select class='form-control {{ $errors->has('serie_id') ? 'is-invalid' : '' }}' name='serie_id'>
                            <option value='' selected disabled> {{ __('Please choose') }} </option>
                            @foreach ($series as $serie)
                                <option value='{{ $serie->id }}' {{ old('serie_id') == $serie->id ? 'selected' : '' }}>
                                    {{ $serie->title }}
                                </option>
                            @endforeach
                        </select>
                        @if ($errors->has('serie_id'))
                            <p class='invalid-feedback'> {{ $errors->first('serie_id') }} </p>
                        @endif
                    </div>
                    <x-forms.input name="episode_number" type="number" label="{{__('Episode number')}}"/> <!--Itt lehetne figyelni arra, hogy csak azt a számot lehessen beírni, ami kisebb mint a episode count a seriesben de időhiány miatt sajnos ki kell hagynom.-->
                </div>
            </div>
            </div>
        </div>
    </div>
    </form>
@endsection
