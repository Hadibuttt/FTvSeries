<!--Header Start-->
<html>
<head>
<title>FTvSeries - TV Series starting with A, B or C</title>
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

<body style="background-color:black;font-family:normal;">

<div style="background-color:slategray;color:white;border:2px solid slategray;font-size:17px;border-radius:7px;margin-top:1.5px;width:99.8%;margin-left:1.5px;">

<a href="/" style="color:white;">   | Home

<a href="/list-of-all-series" style="color:white;">| List of All Series 

<a href="/list-of-all-genre" style="color:white;">| List of All Genre |</a></a></a></div><br>

<center>
<a href="/">
<img src="{{asset('images/logoM.png')}}" alt="" style="height:250px;width:250;background-color:white;border-radius:6px;"></img>
</a>
</center>

<br><div style="background-color:darkolivegreen;color:white;border:2px solid darkolivegreen;font-size:17px;border-radius:5px;" class="col-lg-12 col-md-12 col-sm-12 col-md-12 col-xs-12"> 
        <div style="text-align:center;">Join our <a href="https://www.facebook.com/MysticTvSeries" style="color:Black;font-size:17px;"> facebook page</a> to get all the news and updates.
            <img src="{{asset('images/new_facebook_like_640.png')}}" style="width:35px;height:20px;"></img>
        </div>
    </div><br>

<form action="/search" method="post">
    @csrf
<br><input type="text" name="1" required="" style="width:90%;font-size:15px;" placeholder="  Type name of series to search..."><button type="submit" name="btn" style="width:10%;font-size:15px;">Search</button><br>
</form>
<!--Header End-->

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

<!--Footer Start-->
<div style="background-color:slategray;color:white;border:10px solid slategray;margin:1px;font-size:17px;"  class="col-xs-12 col-sm-12 col-md-12 col-lg-12">Watch Free Movies and Tv series from:

    <br> » <a href="http://getviewstech.com/" style="color:white;" >Get Free Youtube Views And Website Traffic for Free Now! </a>
    
    <br> » <a href="https://androidstore1.com/" style="color:white;">Download Latest Games And Software Cracks for Free Now!</a>
    
    <br> » <a href="http://moviescounter.biz/" style="color:white;">Watch and Download Latest Hindi Dubbed Movies Free Now!</a></div>
    
    <div  class="col-xs-12 col-sm-12 col-md-12 col-lg-12"><br>
    </div>
    
    
    <br><center><div style="color:darklivegreen;background-color:white;border:2px solid white;margin:1px;font-size:17px;" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">Love MysticSeries?Help us by Donating! Contact us at info@mysticseries.com</div></center>
    
    <center><div style="background-color:slategray;color:white;border:2px solid slategray;font-size:17px;" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">© MysticSeries</div></center>
    
    </body>

    </html>
<!--Footer End-->