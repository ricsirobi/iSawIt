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