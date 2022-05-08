@extends('layouts.main')
@section('content')
    <div class='row'>
        <div class='col-md-8 col-lg-6 mx-auto'>
            <div class='card'>
                <div class="card-body">
                    <h3 class='display-3 mb-5'>{{ __('Login') }}</h3>
                    <form method='post' action='{{ route('login') }}'>
                        @csrf
                        <x-forms.input name="email" type="email" label="{{__('Email')}}" placeholder="{{__('Email')}}"/>
                        <x-forms.input name="password" type="password" label="{{__('Password')}}" placeholder="{{__('Password')}}"/>
                        <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" value="1" name='remember' id="remember">
                            <label class="form-check-label" for="terms">
                              {{__('Remember me')}}
                            </label>
                            <div class="invalid-feedback">
                                You must agree before register.
                            </div>
                          </div>
                        <div class='d-grid'>
                            <button type='submit' class='btn btn-primary btn-lg'> {{'Login'}}</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
