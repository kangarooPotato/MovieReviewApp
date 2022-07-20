@extends('master')

@section('content')
    <h1>Edit Review Form</h1>

    <form method="POST" action="
        {{ action('ReviewController@update', $review->id) }}">
        {{ method_field('PATCH') }}

        @include('partials.reviewsForm',
        ['buttonName' => 'Update',
        'name' => $review->title,
        'description' => $review->body])
    </form>
    @include('partials.errors')

@endsection
