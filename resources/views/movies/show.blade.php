@extends('master')


@section('content')

    <h1>Category</h1>
        ID: {{ $movie->id }}<br>
        Name: {{ $movie->name }}<br>
        Description: {{ $movie->description }}<br><br>

    @foreach($movie-> reviews as $review)
        <h4>Review:</h4>
        ID: {{ $movie->id }}<br>
        Title: {{ $movie->title }}<br>
        Body: {{ $movie->body }}<br>
        Author ID: {{ $movie->author_id }}<br><br>
    @endforeach

@endsection
