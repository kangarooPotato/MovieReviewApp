@extends('master')

@section('content')
    <h1>Deleted Movies</h1>

    @foreach ($movies as $movie)
        Category ID: {{ $movie->id }}<br>
        Name: {{ $movie->name }}<br>
        Description: {{ $movie->description }}<br>
        <a href="{{ action('MovieController@restore',$movie->id) }}">
            [restore]</a><br>
        <a href="{{ action('MovieController@forceDelete',$movie->id) }}">
            [Force Delete]</a><br>
        <br>
    @endforeach
@endsection
