<!--Header Start-->
<html>
<head>
<title>{{$series->name}} - {{$season->name}} - FTvSeries</title>
<meta name="description" content="{{$season->seo}}">
<meta name="keywords" content="F2TvSeries, {{$series->name}} {{$season->name}}, free, download, tv show, english, tv series, series, show, hd mp4, mobile, full, season, episode, complete, game of thrones, got, mp4, 3gp, 720p">
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
    
    <a href="/" style="color:white;margin-left:-8px;"><b>Home </a> » <a href="/tv-series-starting-with/{{$series->First_Alphabet}}/{{$series->Mid_Alphabet}}/{{$series->Last_Alphabet}}" style="color:white;margin-left:3px;">{{$series->First_Alphabet}}, {{$series->Mid_Alphabet}} or {{$series->Last_Alphabet}}</a>  »  <a href="/{{$series->slug}}/series" style="color:white;margin-left:2px;">{{$series->name}}</a> » {{$season->name}}</b></div>
               
    <div><br><br><br></div>
    <center><img src="{{asset('series/images'.'/'.$series->image)}}" alt="{{$series->name}} style="border:1px solid black;border-radius:7px;"></img></center>
   
   <div style="color:white;font-size:18px;text-align:center;"><b>{{$series->name}}</b></div>
      
   <br><div style="color:white;font-size:16px;text-align:center;">{{$season->name}}</div>
   
   <div style="background-color:white;color:black;border:14px solid black;border-radius:16px;font-size:16.5px;margin-left:2px;width:100%;"> <b> Views:</b>{{$series->season_views}} <br><b>Episodes:</b>{{$epcount}}<br></div>

   <div style="background-color:darkolivegreen;color:white;border:5px solid darkolivegreen;margin:1px;font-size:19px;border-radius:5px;text-align:center;">Episodes</div>
    <br>

@foreach ($episode as $ep)
    <big style="color:darkslategray;"><b><a href="/{{$series->slug}}/{{$season->slug}}/{{$ep->slug}}/series" style="color:darkslategray;margin-left:4px;"> » {{$ep->name}}</b></a><br></big>
<br>
@endforeach

@include('partials.footer')