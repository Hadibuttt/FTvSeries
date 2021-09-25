<!--Header Start-->
<html>
<head>
<title>{{$series->name}} - {{$season->name}} - {{$episode->name}} - FTvSeries</title>
<meta name="description" content="{{$episode->seo}}">
<meta name="keywords" content="F2TvSeries, {{$series->name}} {{$season->name}} {{$episode->name}}, free, download, tv show, english, tv series, series, show, hd mp4, mobile, full, season, episode, complete, game of thrones, got, mp4, 3gp, 720p">
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

<br><div style="background-color:darkolivegreen;color:white;border:4px solid darkolivegreen;margin:1px;font-size:17px;border-radius:5px;word-spacing:2px;" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

	<a href="/" style="color:white;margin-left:-8px;"><b>Home </a> »<a href="/tv-series-starting-with/{{$series->First_Alphabet}}/{{$series->Mid_Alphabet}}/{{$series->Last_Alphabet}}" style="color:white;margin-left:2px;"> {{$series->First_Alphabet}}, {{$series->Mid_Alphabet}} or {{$series->Last_Alphabet}}</a>  »  <a href="/{{$series->slug}}/series" style="color:white;margin-left:2px;">{{$series->name}}</a> »  <a href="/{{$series->slug}}/{{$season->slug}}/series" style="color:white;margin-left:2px;"> {{$season->name}} </b></a> <b> » {{$episode->name}} </b></div>

	<br><br><br>

<center><img src="{{asset('series/images'.'/'.$series->image)}}" alt="{{$series->name}} style="border:1px solid black;border-radius:7px;"></img></center>

<div style="color:white;font-size:18px;text-align:center;"><b>{{$series->name}}</b></div>

<br><div style="color:white;font-size:15px;text-align:center;">{{$season->name}} - {{$episode->name}} </div>
<br>

<div style="background-color:white;color:black;border:1px solid black;border-radius:4px;font-size:16.5px;width:99.4%;margin-left:2px;"><b>Views :</b> {{$series->episode_views}}
</div>

<br>
<div style="background-color:darkolivegreen;color:white;border:8px solid darkolivegreen;border-radius:5px;text-align:center;"><a href="/{{$series->slug}}/{{$season->slug}}/{{$episode->slug}}/download" style="color:white;">Download Mp4 Files </a></div>
<br>
<div style="color:darkslategray;font-size:16px;margin-left:7px;"><b> » {{$series->name}} - {{$season->name}} - {{$episode->name}} (FTvSeries).mp4 ({{$series->series_views}} Downloads) </b></div>

<br>
<div style="background-color:darkolivegreen;color:white;border:8px solid darkolivegreen;border-radius:5px;text-align:center;"><a href="/{{$series->slug}}/{{$season->slug}}/{{$episode->slug}}/download" style="color:white;">Download HD Mp4 Files </a></div>
<br>
<div style="color:darkslategray;font-size:16px;margin-left:7px;"><b> » {{$series->name}} - {{$season->name}} - {{$episode->name}} HD (FTvSeries).mp4 ({{$series->season_views}} Downloads) </b></div>

<br>
<div style="background-color:darkolivegreen;color:white;border:8px solid darkolivegreen;border-radius:5px;text-align:center;"><a href="/{{$series->slug}}/{{$season->slug}}/{{$episode->slug}}/download" style="color:white;">Download 3gp Files </a></a>  </div>
<br>
<div style="color:darkslategray;font-size:16px;margin-left:7px;"><b> » {{$series->name}} - {{$season->name}} - {{$episode->name}} (FTvSeries).3gp ({{$series->episode_views}} Downloads) </b></div>

<br>

@include('partials.footer')