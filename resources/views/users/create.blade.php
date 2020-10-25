@extends ('form')

@section ('content')
    <h1>Create account</h1>

    <form method="post" action="/users">
        @csrf

        <div class="field">
            <label for="title">Username</label>

            <input type="text" name="username" placeholder="Username here..">
        </div>

        <div class="field">
            <label for="user_id">Password</label>

            <input type="password" name="password" placeholder="Password here..">
        </div>

        <button type="submit">Submit!</button>
    </form>
@endsection
