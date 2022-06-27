<?php

namespace App\Http\Controllers;

use App\Models\Episode;
use Illuminate\Http\Request;
use App\Models\Serie;

use App\Models\View;
use Auth;


class EpisodeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $series = Serie::orderBy('title')->get();
        return view('episode.add')->with(['series' => $series]);

        /*$series = Serie::orderBy('title')->get();
        return view('episode.add')->with(['series' => $series]);
    */
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $episode = Episode::create($request->except('_token'));

       
        $episode ->  save();
        
        return redirect()-> route('serie.details', $request->serie_id)->with('success', __('Episode added successfully'));
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Episode  $episode
     * @return \Illuminate\Http\Response
     */
    public function show(Episode $episode)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Episode  $episode
     * @return \Illuminate\Http\Response
     */
    public function edit(Episode $episode)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Episode  $episode
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Episode $episode)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Episode  $episode
     * @return \Illuminate\Http\Response
     */
    public function destroy(Episode $episode)
    {
        //
    }

    public function seenEpisode(Episode $episode, Request $request)
    {
       
        $request->validate([
            'seen' => 'required|',
            'h'=> 'required|',
        ]);
        
        $view = new View();
        $view->user()->associate(Auth::user());
        if(!$episode->views->where('user_id', '=', $view->user_id)->all())
        {
            $episode -> views()->save($view);
            return back()->with('success',__("Added to seen"));
        }
        else
        {
            $episode-> views()-> where('user_id', '=', $view->user_id)->delete(); 
            return back()->with('error',__("Deleted from seen"));
        }
    }
}
