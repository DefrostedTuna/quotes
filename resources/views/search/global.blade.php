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
                        @foreach($quotes as $quote)
                            <div class="search__quote">
                                <span>{{ $quote->text }}</span>
                                <span>- {{ $quote->author->name }}</span>
                            </div>
                        @endforeach
                    </div>
                    <div class="col s12 m4">
                        <h5>Authors</h5>
                        @foreach($authors as $author)
                            <p> {{ $author->name }}</p>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection