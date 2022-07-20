@extends('master')

@section('content')
    <h1>Edit Movie Form</h1>

    <form method="POST" action="
        {{ action('MovieController@update', $movie->id) }}">
        {{ method_field('PATCH') }}

        @include('partials.moviesForm',
        ['buttonName' => 'Update',
        'name' => $movie->name,
        'description' => $movie->description])
    </form>
    @include('partials.errors')

@endsection
