<!--Header Start-->
<html>
<head>
<title>FTvSeries - TV Series starting with {{$F}}, {{$M}} or {{$L}}</title>
<meta name="description" content="FTvSeries - The only site to free download your all favorite english tv series and season in compatible mobile format (HD Mp4, Mp4 and 3gp), have fun downloading. ">
<meta name="keywords" content="F2TvSeries, free, download, tv show, english, tv series, series, show, hd mp4, mobile, full, season, episode, complete, game of thrones, got, mp4, 3gp, 720p">
<link rel="icon" href="{{asset('images/overwolf-filled.png')}}">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
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


<br><div style="background-color:darkolivegreen;color:white;border:5px solid darkolivegreen;margin:1px;font-size:17px;" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

<a href="/" style="color:white;margin-left:-8px;"><b>Home </a>  » <span style="color:white;margin-left:-1px;">{{$F}}, {{$M}} or {{$L}}</b></span></div>

<div style="background-color:white;color:black;border:5px solid white;margin:1px;font-size:17px;margin-top:-0.0px;" class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><center>Tv Series starting with {{$F}}, {{$M}} or {{$L}}</center></div>

<div><br><br><br></div>

<br><div style="color:darkslategray;font-size:17.5px;line-height:33px;margin-left:5px;">

    @foreach ($series as $ser)
    <b><a href="/{{$ser->slug}}/series" style="color:darkslategray;font-size:18.5px;line-height:33px;margin-left:5px;"> <i class="glyphicon glyphicon-hand-right"></i> &nbsp; {{$ser->name}}</a></b><br>
    @endforeach

</div>

<br>

<div class="d-flex justify-content-center">
  {!! $series->links() !!}
</div>


@include('partials.footer')