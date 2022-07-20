@extends('master')

@section('content')
    <h1>New Review</h1><hr>

    <form method="POST" action="{{ action('ReviewController@store') }}" enctype="multipart/form-data">
        {{ csrf_field() }}
        <label for="title">Title:</label>
        <input name="title" type="text" placeholder="Your review title"><br>

        <label for="body">Body:</label>
        <input name="body" type="text" placeholder="Your review goes here!" style="width:300px;height:200px;"><br>
        <label for="movie_id">Movie</label>
        <select name="movie_id">
            @foreach($movies as $id => $movie)
                <option value="{{$id}}">{{$movie}}</option>
            @endforeach
        </select><br>

        <label for="tags">Your Rates</label>
        <select name="rates[]">
            @foreach($rates as $id => $rate)
                <option value="{{$id}}">{{$rate}}</option>
            @endforeach
        </select><br>

        <input type="file" name="file" accept="image/*">
        <hr>
        <input type="submit" value="Create"><br>
    </form>

@endsection
