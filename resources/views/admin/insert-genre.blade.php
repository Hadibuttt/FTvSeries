<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Insert Genre</title>
    <!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    @if (Session::has('message'))
         <br>   
        <div class="alert alert-dismissable alert-success">    
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                    {{ Session::get('message') }}
        </div>
    @endif
<br>
<h1>Insert Genre</h1>
<form action="/admin/insert-genre" method="post">
    @csrf
<input type="text" name="name" placeholder="Enter genre name">

<button type="submit" name="btn">Insert</button>
</form>
</body>
</html>