@extends('layouts.main')

@section('content')
    <div class="authors__index--container">
        <div class="authors__index--wrap">
            <div class="container">
                <h3>Authors</h3>
                <hr>
                @foreach($authors as $author)
                    <p class="author-link--black"><a href="{{ route('authors.show', $author->id) }}">{{ $author->name }}</a></p>
                @endforeach
                <hr>
                <div class="center-align">
                    {!! $authors->render() !!}
                </div>

            </div>
        </div>
    </div>
@endsection