<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Homepage</title>
</head>
<body>
<h1>Welcome to the homepage!</h1>
<a href="{{ route('create') }}">Create</a>
<a href="{{ route('posts', 1) }}">Post 1</a>
<a href="{{ route('posts', 2) }}">Post 2</a>
<a href="{{ route('posts', 3) }}">Post 3</a>

</body>
</html>