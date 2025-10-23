@extends('template_copy.base')

@section('content')


<form action="{{ route('blog.store') }}" method="post">
    @csrf
    <div>
        <label for="title">Title:</label>
        <input type="text" name="title" minlength="4" maxlength="60" id="title" maxlength="60" required>
    </div>
    <div>
        <label for="entry">Entry:</label>
        <input type="text" name="entry" minlength="20" maxlength="250" id="entry" maxlength="250" required>
    </div>
    <div>
        <label for="text">Text:</label>
        <textarea name="text" id="text" required></textarea>
    </div>
    <div>
        <label for="author">Author:</label>
        <input type="text" name="author" minlength="4" maxlength="100" id="author" maxlength="100" required>
    </div>
    <div>
        <label for="genre">Genre:</label>
        <input type="text" name="genre" minlength="4" maxlength="100" id="genre" maxlength="100" required>
    </div>
    <div>
        <label for="path">Path:</label>
        <input type="text" name="path" id="path" maxlength="100">
    </div>
    <div>
        <button type="submit">Create Blog</button>
    </div>
</form>

@endsection
