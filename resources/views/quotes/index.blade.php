@extends('layouts.main')

@section('content')
    <div class="authors__index--container">
        <div class="authors__index--wrap">
            <div class="container">
                <h3>Quotes</h3>
                <hr>
                <div class="row masonry quote__index--wrap">
                    @foreach($quotes as $quote)
                        <div class="col s12 m6 l4">
                            <div class="quote__card">
                                <a href="{{ route('quotes.show', $quote->id) }}">
                                    <span class="">"{{ $quote->text }}"</span>
                                    <hr>
                                    <span class="">- {{ $quote->author->name }}</span>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
                <hr>
                <div class="center-align">
                    {!! $quotes->render() !!}
                </div>

            </div>
        </div>
    </div>
@endsection