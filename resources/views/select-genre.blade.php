<!--Header Start-->
<html>
<head>
<title>FTvSeries - {{$g}}</title>
<meta name="description" content="FTvSeries - The only site to free download your all favorite english tv series and season in compatible mobile format (HD Mp4, Mp4 and 3gp), have fun downloading. ">
<meta name="keywords" content="F2TvSeries, @foreach($series as $ser) {{$ser->name}}, @endforeach free, download, tv show, english, tv series, series, show, hd mp4, mobile, full, season, episode, complete, game of thrones, got, mp4, 3gp, 720p">
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

<!-- Bootstrap CSS -->
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

<style>
.button {position:fixed;bottom:20px;right:30px;}
.button1 {position:fixed;bottom:80px;right:30px;}
</style>

<br>

<div style="background-color:darkolivegreen;color:white;border:4px solid darkolivegreen;margin:1px;font-size:17px;border-radius:6px;word-spacing:2px;" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
             
                 <a href="/" style="color:white;margin-left:-8px;"><b>Home </a> »<span style="color:white;margin-left:3px;"> All Tv Series in {{$g}}</span></b></div>
             

<br>
<br>
<br>

@foreach ($series as $ser)
    <a href="/{{$ser->slug}}/series" style="font-size:18px;margin-left:8px;color:darkslategrey;">
        <b><i class="glyphicon glyphicon-hand-right"></i> &nbsp{{$ser->name}}</b></a><br>
    <br>
@endforeach

@include('partials.footer')

<button onclick="scrollWin(0, -15000)" class="btn button1"><i class="glyphicon glyphicon-chevron-up"></i></button><br>
<button onclick="scrollWin(0, 15000)" class="btn button"><i class="glyphicon glyphicon-chevron-down"></i></button><br>

<script>
    function scrollWin(x, y)
     {window.scrollBy(x, y);}
</script>