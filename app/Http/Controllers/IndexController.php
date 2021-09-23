<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Series;
use App\Models\Season;
use App\Models\Episode;
use App\Models\Link;

class IndexController extends Controller
{
    public function list_all_series()
    {
        $series = Series::all();
        return view('list-of-series', compact('series'));
    }

    public function series($series_slug)
    {
        $series = Series::where('slug',$series_slug)->first();
        $seasons = Season::where('series_slug',$series_slug)->orderBy('id','DESC')->get();
        $count = Season::where('series_slug',$series_slug)->count();
        return view('front-page', compact('series','seasons','count'));
    }

    public function season($series_slug, $season_slug)
    {
        $series = Series::where('slug',$series_slug)->first();
        $season = Season::where('series_slug',$series_slug)->where('slug',$season_slug)->first();

        $episode = Episode::where('series_slug',$series_slug)
        ->where('season_slug',$season_slug)
        ->orderBy('id','DESC')
        ->get();

        $epcount = Episode::where('series_slug',$series_slug)->where('season_slug',$season_slug)->count();

        return view('season-page', compact('series','season','episode','epcount')); 
    }


    public function episode($series_slug, $season_slug, $episode_slug)
    {
        $series = Series::where('slug',$series_slug)->first();
        $season = Season::where('series_slug',$series_slug)->where('slug',$season_slug)->first();

        $episode = Episode::where('series_slug',$series_slug)
        ->where('season_slug',$season_slug)
        ->where('slug',$episode_slug)
        ->first();
    
        return view('episode-page', compact('series','season','episode')); 
    }

    public function download($series_slug, $season_slug, $episode_slug)
    {
        $series = Series::where('slug',$series_slug)->first();
        $season = Season::where('series_slug',$series_slug)->where('slug',$season_slug)->first();

        $episode = Episode::where('series_slug',$series_slug)
        ->where('season_slug',$season_slug)
        ->where('slug',$episode_slug)
        ->first();

        $link = Link::where('series_slug',$series_slug)
        ->where('season_slug',$season_slug)
        ->where('episode_slug',$episode_slug)
        ->first();
    
        return view('download-page', compact('series','season','episode','link')); 
    }


}
