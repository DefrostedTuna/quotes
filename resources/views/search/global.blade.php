@extends('layouts.main')

@section('content')
    <div class="search__global--container">
        <div class="search__global--wrap">
            <div class="container">
                <h3>Search results</h3>
                <hr>
                <hr class="white">
                <div class="row">
                    <div class="col s12 m8">
                        <div class="outline-card">
                            <h5>Quotes</h5>
                            <hr>
                            @if(!count($quotes))
                                <h5>No quotes found.</h5>
                            @else
                                <div class="row masonry quote__index--wrap">
                                    @foreach($quotes as $quote)
                                        <div class="col s12 m12 l6">
                                            <div class="quote__card">
                                                <a href="{{ route('quotes.show', $quote->id) }}">
                                                    <span>"{{ $quote->text }}"</span>
                                                    <hr>
                                                    <span>- {{ $quote->author->name }}</span>
                                                </a>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="col s12 m4">
                        <div class="outline-card">
                            <h5>Authors</h5>
                            <hr>
                            @if(!count($authors))
                                <h5>No authors found.</h5>
                            @else
                                @foreach($authors as $author)
                                    <p class="author-link--black"><a href="{{ route('authors.show', $author->id) }}">{{ $author->name }}</a></p>
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection