<body style="background-color:black;font-family:normal;">

    <div style="background-color:slategray;color:white;border:2px solid slategray;font-size:17px;border-radius:7px;margin-top:1.5px;width:99.8%;margin-left:1.5px;">
    
    <a href="/" style="color:white;">   | Home
    
    <a href="/search/list-of-all-series" style="color:white;">| List of All Series 
    
    <a href="/search/genre" style="color:white;">| List of All Genre |</a></a></a></div><br>
    
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
    <br><input type="text" name="data" required="" style="width:90%;font-size:15px;" placeholder="  Type name of series to search..."><button type="submit" name="btn" style="width:10%;font-size:15px;">Search</button><br>
    </form>
    <!--Header End-->