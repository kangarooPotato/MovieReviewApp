@extends('master')


@section('content')

    <h1>Movie</h1>
        ID: {{ $movie->id }}<br>
        Title: {{ $movie->title }}<br>
        Description: {{ $movie->description }}<br><br>

    @foreach($movie-> reviews as $review)
        <h4>Review:</h4>
        ID: {{ $review->id }}<br>
        Title: {{ $review->title }}<br>
        Body: {{ $review->body }}<br>
        Author ID: {{ $review->author_id }}<br><br>
    @endforeach

@endsection
