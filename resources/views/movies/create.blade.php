@extends('master')

@section('content')
    <h1>New Movie Form</h1>

    <form method="POST" action="{{action ('MovieController@store')}}">

        @include('partials.reviewsForm',
        ['buttonName'  => 'Create',
        'title'        => old('title'),
        'description' => old('description')])

    </form>

    @include('partials.errors')

@endsection
