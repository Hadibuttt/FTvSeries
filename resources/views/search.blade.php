<!--Header Start-->
<html>
<head>
@if ($nodata == 0)<title> What are you looking for? - FTvSeries</title>    
@else<title> Are you looking for {{$search}}? - FTvSeries</title>@endif
<meta name="description" content="FTvSeries - The only site to free download your all favorite english tv series and season in compatible mobile format (HD Mp4, Mp4 and 3gp), have fun downloading. ">
<meta name="keywords" content="F2TvSeries, Search Page, free, download, tv show, english, tv series, series, show, hd mp4, mobile, full, season, episode, complete, game of thrones, got, mp4, 3gp, 720p">
<link rel="icon" href="{{asset('images/overwolf-filled.png')}}">
<link href="{{asset('styles/css/WBootstrap.css')}}" rel="Stylesheet">
<!-- Bootstrap CSS -->
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
<style>
.a {
   padding:8px 16px;
   border:1px solid #ccc;
   color:#333;
   font-weight:bold;
  }
a:hover{text-decoration:underline;}
a{text-decoration:none;}
.button {position:fixed;bottom:20px;right:30px;}
.button1 {position:fixed;bottom:80px;right:30px;}
</style>
</head>

@include('partials.header')

@if ($nodata == 0)
    <center><big style='font-size:19px;text-align:center;color:white;border:1px solid white;padding:2px;'>Enter a Keyword</big></center>
@else

@forelse ($results as $result)
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        
        <a href="/{{$result->slug}}/series" style="color:aliceblue;text-align:center;font-size:19px;margin-right:10px;"> » {{$result->name}}</a>
        </div>
        
         <div class="col-xs-8 col-xs-offset-4 col-sm-8 col-sm-offset-4 col-md-11 col-md-offset-1 col-lg-11 col-lg-offset-1">
        <a href="/{{$result->slug}}/series"><img src="{{asset('series/images'.'/'.$result->image)}}" alt="{{$result->name}}" style="border:1px solid black;border-radius:7px;height:240px;margin-top:4px;"></img></a></center>        
        </div>
      
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <br>
        </div>

    </div>

    @empty
    <center><big style='font-size:19px;text-align:center;color:white;border:1px solid white;padding:2px;'>No Results found</big></center>
    @endforelse
    @endif
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <br>
    </div>

    @include('partials.footer')

    <button onclick="scrollWin(0, -15000)" class="btn button1"><i class="glyphicon glyphicon-chevron-up"></i></button><br>
    <button onclick="scrollWin(0, 15000)" class="btn button"><i class="glyphicon glyphicon-chevron-down"></i></button><br>

<script>
    function scrollWin(x, y)
     {window.scrollBy(x, y);}
</script>