@extends('layouts.main')
@section('content')
    <div class='row'>
        <div class='col-md-8 col-lg-6 mx-auto'>
            <div class='card'>
                <div class="card-body">
                    <h3 class='display-3 mb-5'>{{ __('Sign up') }}</h3>
                    <form method='post' action='{{ route('register') }}'>
                        @csrf
                        <x-forms.input name="name" label="{{__('Full name')}}" placeholder="{{__('Full name')}}"/>
                        <x-forms.input name="email" type="email" label="{{__('Email')}}" placeholder="{{__('Email')}}"/>
                        <x-forms.input name="password" type="password" label="{{__('Password')}}" placeholder="{{__('Password')}}"/>
                        <x-forms.input name="password_confirmation" type="password" label="{{__('Password confirmation')}}" placeholder="{{__('Password confirmation')}}"/>
                        <div class="form-check mb-3">
                            <input class="form-check-input {{ $errors -> has('terms') ? ' is-invalid' : ''}}" type="checkbox" value="1" name='terms' id="terms">
                            <label class="form-check-label" for="terms">
                              {{__('Accept every rules')}}
                            </label>
                            <div class="invalid-feedback">
                                You must agree before register.
                            </div>
                          </div>
                        <div class='d-grid'>
                            <button type='submit' class='btn btn-primary btn-lg'> {{'Register'}}</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
