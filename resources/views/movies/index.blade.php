@extends('master')


@section('content')

    <h1>All Categories</h1>
    @foreach ($movies as $movie)
        ID: {{ $movie->id }}<br>
        Name: {{ $movie-> title }}<br>
        Description: {{ $movie->description }}<br><br>

        <form method="post" action="{{ action('CategoryController@destroy', $movie->id) }}">
            {{ method_field('DELETE') }}
            {{ csrf_field() }}
            <input class="btn btn-outline-danger btn-sm" type="submit" value="Delete">
        </form><hr>

    @endforeach
    {{ $movies->links() }}
@endsection
