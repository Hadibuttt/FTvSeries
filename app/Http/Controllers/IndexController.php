<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Series;
use App\Models\Season;
use App\Models\Episode;
use App\Models\Link;
use App\Models\Genre;

class IndexController extends Controller
{
    public function more_updates()
    {
        $episode = Episode::orderBy('id','DESC')->limit(30)->get();
        $season = Season::orderBy('id','DESC')->limit(30)->get();
        $series = Series::orderBy('id','DESC')->limit(30)->get();

        return view('more-updates', compact('episode','season','series'));
    }

    public function latest_series()
    {
        $episode = Episode::orderBy('id','DESC')->limit(17)->get();
        $season = Season::orderBy('id','DESC')->limit(17)->get();
        $series = Series::orderBy('id','DESC')->limit(17)->get();

        return view('index', compact('episode','season','series'));
    }

    public function search(Request $request)
    {
        if($request->data == ""){
            $nodata = 0;
            return view('search', compact('nodata'));
        }
        
        else{
        $results = Series::select(['slug','name','image'])
        ->where('name', 'like', "%$request->data%")
        ->orderBy('name')
        ->get();

        $search = $request->data;
        $nodata = 1;
        return view('search', compact('results','search','nodata'));
        }
    }

    public function list_all_series()
    {
        $series = Series::orderBy('id','DESC')->get();
        return view('list-of-series', compact('series'));
    }

    public function list_all_genre()
    {
        $genre = Genre::all();
        return view('list-of-genre', compact('genre'));
    }

    public function genre($genre)
    {
        $series = Series::select(['slug', 'genre','name'])
        ->where('genre', 'like', "%$genre%")
        ->orderBy('name')
        ->get();

        $g = $genre;
        return view('select-genre', compact('series','g'));
    }

    public function series($series_slug)
    {
        $series = Series::where('slug',$series_slug)->first();
        $seasons = Season::where('series_slug',$series_slug)->orderBy('id','DESC')->get();
        $count = Season::where('series_slug',$series_slug)->count();

        if($series!= null && $seasons!=null && $count!=null){
            return view('front-page', compact('series','seasons','count'));
        }else{
            return redirect('/');
        }
        
    }

    public function season($series_slug, $season_slug)
    {
        $series = Series::where('slug',$series_slug)->first();
        $season = Season::where('series_slug',$series_slug)->where('slug',$season_slug)->first();

        $episode = Episode::where('series_slug',$series_slug)
        ->where('season_slug',$season_slug)
        ->orderBy('id','DESC')
        ->paginate(10);
        $episode->withPath('/'.$series_slug.'/'.$season_slug.'/series');

        $epcount = Episode::where('series_slug',$series_slug)->where('season_slug',$season_slug)->count();

        if($series!= null && $season!=null && $episode!=null && $epcount!=null){
            return view('season-page', compact('series','season','episode','epcount'));
        }else{
            return redirect('/'.$series_slug.'/series');
        }         
    }


    public function episode($series_slug, $season_slug, $episode_slug)
    {
        $series = Series::where('slug',$series_slug)->first();
        $season = Season::where('series_slug',$series_slug)->where('slug',$season_slug)->first();

        $episode = Episode::where('series_slug',$series_slug)
        ->where('season_slug',$season_slug)
        ->where('slug',$episode_slug)
        ->first();

        if($series!= null && $season!=null && $episode!=null){
            return view('episode-page', compact('series','season','episode'));
        }else{
            return redirect('/'.$series_slug.'/'.$season_slug.'/series');
        }      
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
    
        if($series!= null && $season!=null && $episode!=null && $link!=null){
            return view('download-page', compact('series','season','episode','link'));
        }else{
            return abort(404);
        }
 
    }


    public function tv_series_starting($a1, $a2, $a3)
    {
        $total = strlen($a1) + strlen($a2) + strlen($a3);
        if($total>3){
            abort(403);
        }
else{
        if($a3 != "0"){
            $series = Series::select(['slug', 'name'])
            ->where('name', 'like', "$a1%")
            ->orWhere('name', 'like', "$a2%")
            ->orWhere('name', 'like', "$a3%")
            ->orderBy('name')
            ->paginate(10);

            $F = $a1;
            $M = $a2;
            $L = $a3;

            $series->withPath('/tv-series-starting-with/'.$a1.'/'.$a2.'/'.$a3);
            return view('tv-series', compact('series','F','M','L')); 
        }

        else{
            $series = Series::where('name', 'regexp', '[0-9]+')
            ->orWhere('name', 'like', "$a1%")
            ->orWhere('name', 'like', "$a2%")
            ->orderBy('name')
            ->paginate(10);

            $F = $a1;
            $M = $a2;
            $L = "0-9";
            $series->withPath('/tv-series-starting-with/'.$a1.'/'.$a2.'/'.$a3);
            return view('tv-series', compact('series','F','M','L')); 
        }
    }

    }
}
