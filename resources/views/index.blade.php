<!--Header Start-->
<html>
<head>
<title>FTvSeries - Home</title>
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

<!--Body Start-->
<audio controls autoplay="true" style="display:none" src="" type="audio/mp3">
</audio>

<br><div style="color:white;background-color:darkolivegreen;border:2px solid darkolivegreen;margin:1px;font-size:18px;border-radius:4px;" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div style="text-align:center;"> Recently Added:</div>
</div>
<br>
<br><div style="color:darkslategray;font-size:17.5px;margin-left:5px;">

    @for ($i = 1; $i <= 17; $i++)
    <img src="https://img.icons8.com/doodle/48/000000/circled-right-2.png" style="height:25px;">
    <a style="color:darkslategray;" href="Season page.php" target="_blank"><b>Karenjit Kaur The Untold Story of Sunny Leone - Season 2 - Episode 6 - [10/10]</b></a><br>                             
    @endfor

<a href="More Updates.php" style="color:darkolivegreen;margin-left:30px;">More Updates..</a>
                                 
<div style="width:99.9%;margin-left:1px;margin-right:3px;">
<center><div style="background-color:darkolivegreen;color:white;border:3px solid darkolivegreen;font-size:18px;" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">Please select from the list of Tv Series:</div><div style="background-color:darkolivegreen;color:white;border:3px solid darkolivegreen;font-size:17px;" class="col-xs-12 col-sm-12 col-md-12 col-lg-12">first character of the tv series</div></center></div>
<br><br><br>

<br><div style="background-color:white;color:black;border:1px solid white;font-size:17px;outline:2px dashed white;margin-left:4px;margin-right:3px;" ><a href="/tv-series-starting-with/a/b/c" style="color:black;margin-left:7.3px;" ><b>A-B-C</b><br>
TV Series starting with A, B or C<br>
Eg. Arrow, Agents of Shield, American Horror Story, Bones, Breaking Bad, Castle etc.<br></a></div>

<br><div style="background-color:white;color:black;border:1px solid white;font-size:17px;outline:2px dashed white;margin-left:4px;margin-right:3px;"><a href="/d" style="color:black;margin-left:7.3px;"><b>D-E-F</b><br>
TV Series starting with D, E or F<br>
Eg. Dexter, Dragon Ball Z, Friends, Doctor Who, Fringe etc.<br></a></div>

<br><div style="background-color:white;color:black;border:1px solid white;font-size:17px;outline:2px dashed white;margin-left:4px;margin-right:3px;"><a href="/g" style="color:black;margin-left:7.3px;"><b>G-H-I</b><br>
TV Series starting with G, H or I<br>
Eg. How i met your Mother, Homeland, Game of thrones, Gotham, Greys Anatomy etc.<br></a></div>

<br><div style="background-color:white;color:black;border:1px solid white;font-size:17px;outline:2px dashed white;margin-left:4px;margin-right:3px;"><a href="/j" style="color:black;margin-left:7.3px;"><b>J-K-L</b><br>
TV Series starting with J, K or L<br>
Eg. Jane the virgin, Lost, Lost Girl etc.<br></a></div>

<br><div style="background-color:white;color:black;border:1px solid white;font-size:17px;outline:2px dashed white;margin-left:4px;margin-right:3px;"><a href="/m" style="color:black;margin-left:7.3px;"><b>M-N-O</b><br>
TV Series starting with M, N or O<br>
Eg. Modren Family, Naruto Shippuden, Once Upon a time etc.<br></a></div>

<br><div style="background-color:white;color:black;border:1px solid white;font-size:17px;outline:2px dashed white;margin-left:4px;margin-right:3px;"><a href="/p" style="color:black;margin-left:7.3px;"><b>P-Q-R</b><br>
TV Series starting with P, Q or R<br>
Eg. Revenge, Prison Break, Person Of Intrest etc.<br></a></div>

<br><div style="background-color:white;color:black;border:1px solid white;font-size:17px;outline:2px dashed white;margin-left:4px;margin-right:3px;"><a href="/s" style="color:black;margin-left:7.3px;"><b>S-T-U</b><br>
TV Series starting with S, T or U<br>
Eg. The Vampire Diaries, Supernatural, Teen Wolf, The Big Bang Theory etc.<br></a></div>

<br><div style="background-color:white;color:black;border:1px solid white;font-size:17px;outline:2px dashed white;margin-left:4px;margin-right:3px;"><a href="/v" style="color:black;margin-left:7.3px;"><b>V-W-X</b><br>
TV Series starting with V, W or X<br>
Eg. Vikings, Witches of East End, White Collar etc.<br></a></div>

<br><div style="background-color:white;color:black;border:1px solid white;font-size:17px;outline:2px dashed white;margin-left:4px;margin-right:3px;" ><a href="/y" style="color:black;margin-left:7.3px;"><b>Y-Z-#</b><br>
TV Series starting with Y, Z or #<br>
Eg. 24, 2 Broke Girls, Yi-Gi-Oh! etc.<br></a></div>

<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"><br></div>

<br><div style="color:darkolivegreen;font-size:18px;"  class="col-xs-12 col-sm-12 col-md-12 col-lg-12">Request for Series:</div>

<div style="color:darkslategray;"  class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

<form action="feedback.php" method="post">
<textarea name="feed" cols="60"  required="" rows="4" placeholder="Enter your Name / Request Here..
E.g [David / GOT S3]" class="col-xs-11 col-sm-11 col-md-11 col-lg-11"></textarea><br><button type="submit" name="go" style="font-size:17px;margin-top:1.9px;">Enter Request</button>
</div>
</form>

<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <br>
</div>
<!--Body Ends -->

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