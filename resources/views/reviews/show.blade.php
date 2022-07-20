@extends('master')


@section('content')

    <h1>Article #{{ $review->id }}</h1>
        Name: {{ $review->title }}<br>
        Body: {{ $review->body }}<br>
        Author ID: {{ $review->author_id }}<br><br>

        Category: {{ $review->movie->title }}<br>
        Description: {{ $review->movie->description }}<br><br>
    @if(count($review->tags)>0)
        <br>Tags:
    @foreach($review->tags as $tag)
        {{ $tag->name }}
    @endforeach
        @else <br> * No Tag
@endif<hr>

    <h2>Picture</h2>
    @isset($review->file)
        <img src="{{ asset('storage/' . $review->file) }}"
             width="100px" height="100px"><br>
    @endisset

@endsection
