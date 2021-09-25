<!--Header Start-->
<html>
<head>
<title>FTvSeries - More Updates</title>
<meta name="description" content="FTvSeries - The only site to free download your all favorite english tv series and season in compatible mobile format (HD Mp4, Mp4 and 3gp), have fun downloading. ">
<meta name="keywords" content="F2TvSeries, free, download, tv show, english, tv series, series, show, hd mp4, mobile, full, season, episode, complete, game of thrones, got, mp4, 3gp, 720p">
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

<!--Body Start-->
 <br><div style="color:white;background-color:darkolivegreen;border:2px solid darkolivegreen;margin:1px;font-size:18px;border-radius:4px;" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div style="text-align:center;"> Recently Added:</div>
</div>
<br>
<br><div style="color:darkslategray;font-size:17.5px;margin-left:5px;">


@foreach ($series as $ser)
@foreach ($season as $sea)
@foreach ($episode as $ep)

@if ($ser->slug == $sea->series_slug && $sea->series_slug == $ep->series_slug  && $sea->slug == $ep->season_slug)
<img src="https://img.icons8.com/doodle/48/000000/circled-right-2.png" style="height:25px;">
<a style="color:darkslategray;" href="/{{$ep->series_slug}}/{{$ep->season_slug}}/{{$ep->slug}}/series"><b>{{$ser->name}} - {{$sea->name}} - {{$ep->name}} - [{{$ep->created_at->format('d/m')}}]</b></a><br>
@endif

@endforeach    
@endforeach
@endforeach

<br>

@include('partials.footer')