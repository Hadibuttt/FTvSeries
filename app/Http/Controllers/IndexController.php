<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Series;

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
        return view('front-page', compact('series'));
    }

}
