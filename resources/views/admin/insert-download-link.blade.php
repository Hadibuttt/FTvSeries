<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Insert Download Link</title>
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
    <h1>Insert Download Link</h1>

    <form action="/admin/insert-download-link" method="POST">
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
    
        <label for="exampleInputEmail1">Episode</label>
        <select name="episode" required="required">
            <option value="">Select Episode</option>
            <option value="Episode 01">Episode 01</option>
            <option value="Episode 02">Episode 02</option>
            <option value="Episode 03">Episode 03</option>
            <option value="Episode 04">Episode 04</option>
            <option value="Episode 05">Episode 05</option>
            <option value="Episode 06">Episode 06</option>
            <option value="Episode 07">Episode 07</option>
            <option value="Episode 08">Episode 08</option>
            <option value="Episode 09">Episode 09</option>
            <option value="Episode 10">Episode 10</option>
            <option value="Episode 11">Episode 11</option>
            <option value="Episode 12">Episode 12</option>
            <option value="Episode 13">Episode 13</option>
            <option value="Episode 14">Episode 14</option>
            <option value="Episode 15">Episode 15</option>
            <option value="Episode 16">Episode 16</option>
            <option value="Episode 17">Episode 17</option>
            <option value="Episode 18">Episode 18</option>
            <option value="Episode 19">Episode 19</option>
            <option value="Episode 20">Episode 20</option>
            <option value="Episode 21">Episode 21</option>
            <option value="Episode 22">Episode 22</option>
            <option value="Episode 23">Episode 23</option>
            <option value="Episode 24">Episode 24</option>
            <option value="Episode 25">Episode 25</option>
            <option value="Episode 26">Episode 26</option>
            <option value="Episode 27">Episode 27</option>
            <option value="Episode 28">Episode 28</option>
            <option value="Episode 29">Episode 29</option>
            <option value="Episode 30">Episode 30</option>
        </select>
        
        <input type="text" name="link">

    <button type="submit" name="btn" class="btn btn-primary">Submit</button>
</form>
</body>
</html>