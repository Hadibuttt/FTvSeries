<!--Header Start-->
<html>
<head>
<title>Download {{$series->name}} - {{$season->name}} - {{$episode->name}} - FTvSeries</title>
<meta name="description" content="FTvSeries - The only site to free download your all favorite english tv series and season in compatible mobile format (HD Mp4, Mp4 and 3gp), have fun downloading. ">
<meta name="keywords" content="F2TvSeries, Download {{$series->name}} {{$season->name}} {{$episode->name}}, free, download, tv show, english, tv series, series, show, hd mp4, mobile, full, season, episode, complete, game of thrones, got, mp4, 3gp, 720p">
<link rel="icon" href="{{asset('images/overwolf-filled.png')}}">
<link href="{{asset('styles/css/WBootstrap.css')}}" rel="Stylesheet">	
<script src="{{asset('styles/js/jquery.min.js')}}"></script>
<script src="{{asset('styles/js/bootstrap.min.js')}}"></script>
</head>
<body>
<br>

<center><button type="submit" style="margin-top:20px;"><a href="{{$link->link}}" download="{{$series->name}} - {{$season->name}} - {{$episode->name}}" style="text-decoration:none;color:black;" download>Download Now!</a></button></center>
<br>

<center><div style="color:red;font-size:15px;">1. Make sure you are using Chrome or UC Browser Only, Downloads won't work on Opera Mini or UC mini.<br>
2. Make sure your ad blocker is turned OFF and you are not using any VPN.<br> 
3. If the video is playing instead of downloading just long press or right click on the video to get Save/Download option.<br></div></center>

<br>
<!--Mystic 3 Images Advertisment-->
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    

<!--Mystic 1st image Advertisment-->
<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
    
    <center>
    <img src="{{asset('images/tolet.jpg')}}" class="img-responsive" style="width:380px;"></img>              
        </center>
   
        <h3 style="text-align:center;" class="col-xs-12 col-sm-12">Advertise With Us!</h3>

</div>

<div class="col-xs-12 col-sm-12 hidden-md hidden-lg">
    <br>
</div>


<!--Mystic 2nd image Advertisment-->
<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
        
    <center>
    <img src="{{asset('images/tolet.jpg')}}" class="img-responsive" style="width:380px;"></img>
    </center>                

        <h3 style="text-align:center;" class="col-xs-12 col-sm-12">Advertise With Us!</h3>
          
    </div>
    
    
    <div class="col-xs-12 col-sm-12 hidden-md hidden-lg">
        <br>
    </div>
    

    <!--Mystic 3rd image Advertisment-->
    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">

        <center>
        <img src="{{asset('images/tolet.jpg')}}" class="img-responsive" style="width:380px;"></img>
        </center>

    <h3 style="text-align:center;" class="col-xs-12 col-sm-12">Advertise With Us!</h3>

</div>
        
</div>

</div>
</body>
</html>