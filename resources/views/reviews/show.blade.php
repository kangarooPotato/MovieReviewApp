@extends('master')


@section('content')

    <h1>Review #{{ $review->id }}</h1>
        Title: {{ $review->title }}<br>
        Body: {{ $review->body }}<br>
        Author ID: {{ $review->author_id }}<br><br>

        Movie Title: {{ $review->movie->title }}<br>
        Description: {{ $review->movie->description }}<br><br>

    @if(count($review->rates)>0)
        <br>Rate:
    @foreach($review->rates as $rate)
        {{ $rate->name }}
    @endforeach
        @else <br> * No Rate
@endif<hr>

    <h2>Favourite Poster</h2>
    @isset($review->file)
        <img src="{{ asset('storage/' . $review->file) }}"
             width="100px" height="100px"><br>
    @endisset

@endsection
