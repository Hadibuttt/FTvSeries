<!--Header Start-->
<html>
<head>
<title>{{$series->name}} - FTvSeries</title>
<meta name="description" content="{{$series->seo}}">
<meta name="keywords" content="F2TvSeries, {{$series->name}},free, download, tv show, english, tv series, series, show, hd mp4, mobile, full, season, episode, complete, game of thrones, got, mp4, 3gp, 720p">
<link rel="icon" href="{{asset('images/overwolf-filled.png')}}">
<link href="{{asset('styles/css/WBootstrap.css')}}" rel="Stylesheet">	
<style>
.a {
   padding:8px 16px;
   border:1px solid #ccc;
   color:#333;
   font-weight:bold;
  }
a:hover{text-decoration:underline;}
a{text-decoration:none;}
</style>
</head>

@include('partials.header')

<br><div style="background-color:darkolivegreen;color:white;border:4px solid darkolivegreen;margin:1px;font-size:17px;border-radius:6px;word-spacing:2px;" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
             
    <a href="/" style="color:white;margin-left:-8px;"><b>Home </a> » <a href="/tv-series-starting-with/{{$series->First_Alphabet}}/{{$series->Mid_Alphabet}}/{{$series->Last_Alphabet}}" style="color:white;margin-left:3px;">{{$series->First_Alphabet}}, {{$series->Mid_Alphabet}} or {{$series->Last_Alphabet}}</a>  » {{$series->name}}</b></div>

<br><br>

<br><center><img src="{{asset('series/images'.'/'.$series->image)}}" alt="{{$series->name}}" style="border:1px solid black;border-radius:7px;"></img></center>

<div style="color:white;font-size:18px;text-align:center;"><b>{{$series->name}}</b></div>

<br>

<p style="color:darkslategray;font-size:17px;text-align:center;"><i><b>{{$series->description}}</b></i></p>

<div style="color:white;text-align:center;"><b>IMDB:</b><a href="{{$series->imdb}}" style="color:darkolivegreen;padding-left:3px;">{{$series->imdb}}</a></div>
<br>
<?php $genre = explode(",", $series->genre);?>
<div style="background-color:white;color:black;border:10px solid black;border-radius:12px;font-size:17;border-radius:14px;margin-left:2px;width:100.1%;"><b>  Casts: </b>{{$series->cast}} <br><b>Genres: </b> <a style="color:darkolivegreen;" href="/{{$genre[0]}}/genre">{{$genre[0]}}</a>, <a style="color:darkolivegreen;" href="/{{$genre[1]}}/genre">{{$genre[1]}}</a><br><b>Run Time:</b> {{$series->runtime}} mins<br><b>Views: </b>{{$series->series_views}} <br><b>Ratings: </b>{{$series->rating}} <br><b>Seasons:</b> {{$count}}

    <br><b>Rate:</b>
    <select> 
    <option>5</option>
    <option>4</option>
    <option>3</option>
    <option>2</option>
    <option>1</option>
    </select><button style="background-color:darkolivegreen;color:white;border:2px solid darkolivegreen;border-radius:5px;padding-left:3px;">Rate This</button></div>
    
    
    
    <div style="background-color:darkolivegreen;color:white;border:5px solid darkolivegreen;margin:1px;font-size:19px;border-radius:5px;text-align:center;">Seasons</div>

    <br>
    
    @foreach ($seasons as $season)                      
    <b><big style="color:darkslategray;"><a href="/{{$season->series_slug}}/{{$season->slug}}/series" style="color:darkslategray;margin-left:4px;font-size:18.5px;"> » {{$season->name}}</a></big></b>

    <br><br>
    @endforeach

    @include('partials.footer')
