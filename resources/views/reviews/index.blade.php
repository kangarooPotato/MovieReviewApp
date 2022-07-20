@extends('master')


@section('content')

    <h1>All Reivews</h1>
    @foreach ($reviews as $review)
        ID: {{ $review->id }}<br>
        Title: {{ $review->title }}<br>
        {{ $review->body }}<br>
        Author ID: {{ $review->author_id }}<br>

        @if(count($review->rates)>0)
            <br>Rate:
            @foreach($review->rates as $rate)
                {{ $rate->name }}
            @endforeach
        @else <br> * No Rate
        @endif
        <br>

{{--        <form method="post" action="{{ action('ReviewController@destroy', $review->id) }}" >--}}
{{--            {{ method_field('DELETE') }}--}}
{{--            {{ csrf_field() }}--}}
{{--            <input class="btn btn-outline-danger btn-sm" type="submit" value="Delete">--}}
{{--        </form>--}}
        <hr>
    @endforeach
    {{ $reviews->links() }}
@endsection
