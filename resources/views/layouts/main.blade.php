<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;500;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Patua+One&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/6897fd4fab.js" crossorigin="anonymous"></script>

    <title>Laravel Gallery</title>
</head>
<body>
    <header>
        <p id="logo">Laravel<br />Gallery</p>
        <ul id="nav">
            <li><a class="{{ Request::path() === '/' ? 'current-page' : '' }}" href="{{ route('home') }}">Home</a></li>
            @if(Auth::check())
                <li><a class="{{ Request::path() === 'posts/create' ? 'current-page' : '' }}" href="{{ route('posts.create') }}">Create Post</a></li>
                <li><a class="{{ Request::path() === 'users/'.Auth::id() ? 'current-page' : '' }}" href="/users/{{ Auth::id() }}">Profile</a></li>
                <li><a href="/users/logout">Logout</a></li>
            @else
                <li><a class="{{ Request::path() === 'users/login' ? 'current-page' : '' }}" href="{{ route('users.login') }}">Login</a></li>
            @endif

        </ul>
    </header>

    <div class="content">
        @yield ('content')
    </div>

    <footer>
        <p>Created by Niek Rottier</p>
        <p>CMGT Prog05</p>
    </footer>
</body>
</html>
