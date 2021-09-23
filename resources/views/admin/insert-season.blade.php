<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Insert Season</title>
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
    <h1>Insert Seasons</h1>

    <form action="/admin/insert-season" method="POST">
        @csrf
    <label for="exampleInputEmail1">Series</label>
        <select name="series" required="required">
            <option value="">Select Series</option>
            @foreach ($series as $ser)
                <option value="{{$ser->slug}}">{{$ser->name}}</option>
            @endforeach
        </select>
    
        <label for="exampleInputEmail1">Season</label>
        <select name="season" required="required">
            <option value="">Select Season</option>
            <option value="Season 01">Season 01</option>
            <option value="Season 02">Season 02</option>
            <option value="Season 03">Season 03</option>
            <option value="Season 04">Season 04</option>
            <option value="Season 05">Season 05</option>
            <option value="Season 06">Season 06</option>
            <option value="Season 07">Season 07</option>
            <option value="Season 08">Season 08</option>
            <option value="Season 09">Season 09</option>
            <option value="Season 10">Season 10</option>
        </select>
    <br><br>
    
    <textarea name="seo" cols="30" rows="10" placeholder="Enter SEO Content"></textarea> 
    <br>

        <button type="submit" name="btn" class="btn btn-primary">Submit</button>
    </form>

</body>
</html>