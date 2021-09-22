<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Insert Series</title>
    	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body class="container">
    @if (Session::has('message'))
         <br>   
        <div class="alert alert-dismissable alert-success">    
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                    {{ Session::get('message') }}
        </div>
    @endif
    
<form action="/admin/insert-series" method="POST" enctype="multipart/form-data">
    @csrf
<input type="text" name="name" placeholder="Enter series name">
<br>

<textarea name="description" cols="30" rows="10" placeholder="Enter description"></textarea> 
<br>

<input type="text" name="imdb" placeholder="Enter imdb link">
<br>

<input type="text" name="rating" placeholder="Enter rating">
<br>

<input type="text" name="series_views" placeholder="Enter series views">
<br>

<input type="text" name="season_views" placeholder="Enter season views">
<br>

<input type="text" name="episode_views" placeholder="Enter episode views">
<br>

<input type="text" name="cast" placeholder="Enter Cast">
<br>

<input type="text" name="runtime" placeholder="Enter Run time">
<br>

<input type="text" name="First_Alphabet" placeholder="Enter First Alphabet">
<br>

<input type="text" name="Mid_Alphabet" placeholder="Enter Mid Alphabet">
<br>

<input type="text" name="Last_Alphabet" placeholder="Enter Last Alphabet">
<br>

<input type="text" name="genre" placeholder="Enter Genre">
<br>

<br>
<input type="file" name="image">
<br>

<br>
<button type="submit" name="btn">Insert</button>
</form>

</body>
</html>