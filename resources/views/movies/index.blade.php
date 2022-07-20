@extends('master')


@section('content')

    <h1>All Categories</h1>
    @foreach ($movies as $movie)
        ID: {{ $movie->id }}<br>
        Movie Title: {{ $movie-> title }}<br>
        Director: {{ $movie->director }}<br>
        Description: {{ $movie->description }}<br>
        Genre: {{ $movie->genre }}<br><br>

        <form method="post" action="{{ action('MovieController@destroy', $movie->id) }}">
            {{ method_field('DELETE') }}
            {{ csrf_field() }}
            <input class="btn btn-outline-danger btn-sm" type="submit" value="Delete">
        </form><hr>

    @endforeach
    {{ $movies->links() }}
@endsection
