@extends('master')


@section('content')

    <h1>All Reivews</h1>
    @foreach ($reviews as $review)
        ID: {{ $review->id }}<br>
        Name: {{ $review->name }}<br>
        Body: {{ $review->body }}<br>
        Author ID: {{ $review->author_id }}<br>
        @if(count($review->tags)>0)
            Tags:
            @foreach($review->tags as $tag)
                {{ $tag->name }}
            @endforeach
        @else * No Tag
        @endif
        <br><br>

        <form method="post" action="{{ action('ReviewController@destroy', $review->id) }}" >
            {{ method_field('DELETE') }}
            {{ csrf_field() }}
            <input class="btn btn-outline-danger btn-sm" type="submit" value="Delete">
        </form><hr>
    @endforeach
    {{ $reviews->links() }}
@endsection
