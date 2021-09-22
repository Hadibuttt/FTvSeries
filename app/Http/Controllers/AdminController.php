<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Session;
use App\Models\Series;

class AdminController extends Controller
{
    public function series_view()
    {
        return view('admin.insert-series');
    }

    public function insert_series_view(Request $request)
    {
        $series = new Series;
        $series->name = $request->name;
        $slug = Str::slug($request->name);
        $series->slug = $slug;
        $series->description = $request->description;
        $series->imdb = $request->imdb;
        $series->series_views = $request->series_views;
        $series->season_views = $request->season_views;
        $series->episode_views = $request->episode_views;
        $series->cast = $request->cast;
        $series->rating = $request->rating;
        $series->runtime = $request->runtime;
        $series->genre = $request->genre;
        $series->First_Alphabet = $request->First_Alphabet;
        $series->Mid_Alphabet = $request->Mid_Alphabet;
        $series->Last_Alphabet = $request->Last_Alphabet;
        
        //Image Upload  
        $name = time().$request->image->getClientOriginalName();
        $image= $request->image->move(public_path().'/series/images/', $name); 
        $series->image = $name;

        $series->save();
        Session::flash('message', "Series Added Successfully!");
        return redirect('/admin/insert-series');
    }



}
