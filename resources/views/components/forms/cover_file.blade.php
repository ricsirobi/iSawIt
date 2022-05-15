<div class="mb-3">
    <label for='cover'> {{ __('Cover image link') }} </label>
    <input type="file" placeholder="{{ __('Cover image link') }}"
        class="form-control {{ $errors->has('cover') ? 'is-invalid' : '' }}" name="cover"
        value="{{ old('cover') }}">
    @if ($errors->has('cover'))
        <p class='invalid-feedback'> {{ $errors->first('cover') }} </p>
    @endif
</div>