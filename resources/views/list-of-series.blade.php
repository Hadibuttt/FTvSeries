<!--Header Start-->
<html>
<head>
<title>FTvSeries - List of All Series</title>
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

<!-- Bootstrap CSS -->
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

<style>
.button {position:fixed;bottom:20px;right:30px;}
.button1 {position:fixed;bottom:80px;right:30px;}
</style>

<br><div style="color:white;background-color:darkolivegreen;border:2px solid darkolivegreen;margin:1px;font-size:18px;border-radius:4px;width:99.9%;" class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><center>List of all Series:</center></div>

<br>

<br><div style="color:darkslategray;font-size:17.5px;line-height:30px;margin-left:5px;">

@foreach ($series as $ser)
    <img src="https://img.icons8.com/doodle/48/000000/circled-right-2.png" style="height:25px;"><a href="/{{$ser->slug}}/series" style="color:darkslategray;"><b>{{$ser->name}}</b></a><br>
@endforeach
</div>

<br>

@include('partials.footer')

<button onclick="scrollWin(0, -15000)" class="btn button1"><i class="glyphicon glyphicon-chevron-up"></i></button><br>
<button onclick="scrollWin(0, 15000)" class="btn button"><i class="glyphicon glyphicon-chevron-down"></i></button><br>

<script>
    function scrollWin(x, y)
     {window.scrollBy(x, y);}
</script>