<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FilmRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => 'required|min:2|max:240',
            'topic_id' => 'required|exists:topics,id',
            'minute_long' => 'required',
            'cover' => 'image|file'

        ];
    }
}
