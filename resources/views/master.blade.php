<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'welcome!')</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <script src="{{ asset('js/app.js') }}"></script>

</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light"><a class="navbar-brand" href="/">Every movie review in the world</a>
    <ul class="navbar-nav mr-auto">
        <li class="nav-item"><a class="nav-link" href="{{ url('movies') }}">Movies</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ url('reviews') }}">Reviews</a></li>
    </ul>
    <span class="navbar-text">
        Last posted article: {{ $lastPostedReview }}<br>
    </span>

</nav>
<div class="container-fluid text-center">
    <div class="row content">
        <div class="col-sm-10 text-left">
            @yield('content')
        </div>
    </div>
</div>

<footer class="container-fluid text-center">
    @yield('footer')
</footer>

</body>
</html>
