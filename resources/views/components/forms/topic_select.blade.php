<div class="mb-3">
    <label for='{{ __('Category') }}'> {{ __('Category') }} </label>
    <select class='form-control {{ $errors->has('topic_id') ? 'is-invalid' : '' }}' name='topic_id'>
        <option value='' selected disabled> {{ __('Please choose') }} </option>
        @foreach ($topics as $topic)
            <option value='{{ $topic->id }}' {{ old('topic_id') == $topic->id ? 'selected' : '' }}>
                {{ $topic->name }}
            </option>
        @endforeach
    </select>
    @if ($errors->has('topic_id'))
        <p class='invalid-feedback'> {{ $errors->first('topic_id') }} </p>
    @endif
</div>