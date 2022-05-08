<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Topic;

class TopicController extends Controller
{
    public function show(Topic $topic)
    {
        $films = $topic -> film()->orderBy('title')->paginate(5);

        return view('topic.show.film')-> with(compact('topic','films'));
    
    }
}
