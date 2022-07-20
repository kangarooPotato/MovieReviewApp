@extends('master')

@section('content')
    <h1>New Article</h1>

    <form method="POST" action="{{ action('ReviewController@store') }}" enctype="multipart/form-data">
        {{ csrf_field() }}
        <label for="name">Name:</label>
        <input name="name" type="text"><br>

        <label for="body">Body:</label>
        <input name="body" type="text"><br>

        <label for="category_id">Category</label>
        <select name="category_id">
            @foreach($movies as $id => $movie)
                <option value="{{$id}}">{{$movie}}</option>
            @endforeach
        </select><br>

        <label for="tags">Rates</label>
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
