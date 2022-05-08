<?php

namespace App\Http\Controllers;

use Image;
use App\Models\Film;
use Illuminate\Http\Request;
use App\Models\Topic;
use App\Http\Requests\FilmRequest;
use App\Models\View;
use Auth;

class FilmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $films = Film::orderBy('title')->paginate(3);
        return view('film.all')->with(compact('films'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $topics = Topic::orderBy('name')->get();
        return view('film.add')->with(['topics' => $topics]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\FilmRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FilmRequest $request)
    {
        $film = Film::create($request->except('_token'));

        $image = $this -> uploadImage($request);
        if($image)
        {
            $film->cover = $image->basename;
            $film ->  save();
        }
        return redirect()-> route('film.details', $film)->with('success', __('Film added successfully'));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Film  $film
     * @return \Illuminate\Http\Response
     */
    public function show(Film $film)
    {
        return view('film.details')->with(compact('film'));
    }
   
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Film  $film
     * @return \Illuminate\Http\Response
     */
    public function edit(Film $film)
    {
        /*if($film->author != Auth::user() )
        {
            return abort(403);
        }*/

        $topics = Topic::orderBy('name')->get();
        return view('film.edit')->with(compact('film','topics'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\FilmRequest  $request
     * @param  \App\Models\Film  $film
     * @return \Illuminate\Http\Response
     */
    public function update(FilmRequest $request, Film $film)
    { 
        /*if($film->author != Auth::user() )
        {
            return abort(403);
        }*/

        $film ->update($request->except('_token'));

        $image = $this -> uploadImage($request);
        if($image)
        {
            if($film->cover)
            {
                //TODO: delete prev image from server
            }
            $film->cover = $image->basename;
            $film ->  save();
        }
        else
        {
            $film->cover = "";
        }
       
        return redirect()->route('film.details',$film)->with('success',__("Film edited successfully"));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Film  $film
     * @return \Illuminate\Http\Response
     */
    public function destroy(Film $film)
    {
        //
    }
    private function uploadImage(Request $request)
    {
        $file = $request-> file('cover');
       
        if(!$file)
        {
            return "";
        }
        $fileName = uniqid();
        $cover = Image::make($file)->save(public_path("upload/img/cover/{$fileName}.{$file->extension()}"));
        //resize/watermark itt lehetséges
        return $cover;
    }

    public function seenFilm(Film $film, Request $request)
    {
        $request->validate([
            'seen' => 'required|',
        ]);
        
        $view = new View();
        $view->user()->associate(Auth::user());
        if(!$film->views->where('user_id', '=', $view->user_id)->all())
        {
            $film -> views()->save($view);
            return back()->with('success',__("Added to seen"));
        }
        else
        {
            $film -> views()->delete($view);
            return back()->with('error',__("Deleted from seen"));
        }
    }
}
