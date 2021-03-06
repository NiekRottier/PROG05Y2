@extends('layouts.main')

@section('content')
    <h1>Edit "{{ $post->title }}"</h1>
    <img class="editPostImg" src="{{ $post->img }}" alt="{{ $post->img }}" />
    <hr />
    <form method="post" action="/posts/{{ $post->id }}">
        @method('PUT')
        @csrf

        <div class="field">
            <label for="title">Title
                <input class="@error('title') errorField @enderror" type="text" name="title" value="{{ $post->title }}">
            </label>

            @error('title')
                <p class="errorText">{{ $errors->first('title') }}</p>
            @enderror
        </div>

        <div class="field">
            <label for="descr">Description
                <input class="@error('descr') errorField @enderror" type="text" name="descr" value="{{ $post->descr }}">
            </label>

            @error('descr')
                <p class="errorText">{{ $errors->first('descr') }}</p>
            @enderror
        </div>

        <button type="submit">Update!</button>
    </form>
@endsection
