<?php

namespace App\Http\Controllers;

use Image;
use App\Models\Serie;
use Illuminate\Http\Request;
use App\Models\Topic;

class SerieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $series = Serie::orderBy('title')->paginate(3);
        return view('serie.all')->with(compact('series'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $topics = Topic::orderBy('name')->get();
        return view('serie.add')->with(['topics' => $topics]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request);
        
        $serie = Serie::create($request->except('_token'));


        $image = $this -> uploadImage($request);
        if($image)
        {
            $serie->cover = $image->basename;
            $serie ->  save();
        }
        return redirect()-> route('serie.details', $serie)->with('success', __('Serie added successfully'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Serie  $serie
     * @return \Illuminate\Http\Response
     */
    public function show(Serie $serie)
    {
        return view('serie.details')->with(compact('serie'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Serie  $serie
     * @return \Illuminate\Http\Response
     */
    public function edit(Serie $serie)
    {
        $topics = Topic::orderBy('name')->get();
        return view('serie.edit')->with(compact('serie','topics'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Serie  $serie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Serie $serie)
    {
        $serie ->update($request->except('_token'));

        $image = $this -> uploadImage($request);
        if($image)
        {
            if($serie->cover)
            {
                //TODO: delete prev image from server
            }
            $serie->cover = $image->basename;
            $serie ->  save();
        }
        else
        {
            $serie->cover = "";
        }
       
        return redirect()->route('serie.details',$serie)->with('success',__("Serie edited successfully"));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Serie  $serie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Serie $serie)
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

   

}
