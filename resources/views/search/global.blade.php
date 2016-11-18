@extends('layouts.main')

@section('content')
    <div class="search__global--container">
        <div class="search__global--wrap">
            <div class="container">
                <h3>Search results</h3>
                <hr>
                @if(!count($authors) && !count($quotes))
                    <h4>No search results!</h4>
                @endif
                <div class="row">
                    <div class="col s12 m8">
                        <h5>Quotes</h5>
                        @if(!count($quotes))
                            <div class="search__quote">
                                <span>No Quotes Found.</span>
                            </div>
                        @else
                            @foreach($quotes as $quote)
                                <div class="search__quote">
                                    <a href="{{ route('quotes.show', $quote->id) }}">
                                        <span>{{ $quote->text }}</span>
                                        <span>- {{ $quote->author->name }}</span>
                                    </a>
                                </div>
                            @endforeach
                        @endif
                    </div>
                    <div class="col s12 m4">
                        <h5>Authors</h5>
                        @if(!count($authors))
                            <div class="search__author">
                                <span>No Authors Found.</span>
                            </div>
                        @else
                            @foreach($authors as $author)
                                <div class="search__author">
                                    <a href="{{ route('authors.show', $author->id) }}">
                                        <span>{{ $author->name }}</span>
                                    </a>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection