<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Session;
use App\Models\Series;
use App\Models\Season;
use App\Models\Episode;
use App\Models\Link;
use App\Models\Genre;

class AdminController extends Controller
{
    public function genre_view()
    {
        return view('admin.insert-genre');
    }

    public function download_link_view()
    {
        $series = Series::orderBy('id','DESC')->get();
        return view('admin.insert-download-link',compact('series'));
    }

    public function episode_view()
    {
        $series = Series::orderBy('id','DESC')->get();
        return view('admin.insert-episode',compact('series'));
    }

    public function season_view()
    {
        $series = Series::orderBy('id','DESC')->get();
        return view('admin.insert-season',compact('series'));
    }
    
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
        $series->seo = $request->seo;
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

    public function insert_season_view(Request $request)
    {
        $season = new Season;
        $season->name = $request->season;
        $slug = Str::slug($request->season);
        $season->slug = $slug;
        $season->series_slug = $request->series;
        $season->seo = $request->seo;

        $season->save();
        Session::flash('message', "Season Added Successfully!");
        return redirect('/admin/insert-season');
    }

    public function insert_episode_view(Request $request)
    {
        $episode = new Episode;
        $episode->name = $request->episode;
        $slug = Str::slug($request->episode);
        $episode->slug = $slug;
        $episode->series_slug = $request->series;

        $season_slug = Str::slug($request->season);
        $episode->season_slug = $season_slug;
        $episode->seo = $request->seo;

        $episode->save();
        Session::flash('message', "Episode Added Successfully!");
        return redirect('/admin/insert-episode');
    }

    public function insert_link_view(Request $request)
    {
        $link = new Link;
        $link->link = $request->link;
        $link->series_slug = $request->series;

        $season_slug = Str::slug($request->season);
        $link->season_slug = $season_slug;

        $episode_slug = Str::slug($request->episode);
        $link->episode_slug = $episode_slug;

        $link->save();
        Session::flash('message', "Download Link Added Successfully!");
        return redirect('/admin/insert-download-link');
    }

    public function insert_genre_view(Request $request)
    {
        $genre = new Genre;
        $genre->name = $request->name;
        
        $genre->save();
        Session::flash('message', "Genre Added Successfully!");
        return redirect('/admin/insert-genre');
    }


}