@extends('layouts.main')

@section('content')
    <div class="full-height--container">
        <div class="full-height--wrap">
            <div class="container">
                <div class="headline-quote--wrap">
                    <h4 class="headline-quote">"{{ $quote->text }}"</h4>
                    <hr>
                    <p class="headline-author"><a href="{{ route('authors.show', $quote->author->id) }}">{{ $quote->author->name }}</a></p>
                </div>
            </div>
        </div>
    </div>
    <div class="quotes__show--container">
        <div class="quotes__show--wrap">
            <div class="container">
                <div class="row">
                    <div class="col s12 m8">
                        <div class="quotes__detail--wrap">
                            <h4>Quote</h4>
                            <hr class="white">
                            <p class="quote-text">"{{ $quote->text }}"</p>
                            <h4>Author</h4>
                            <hr class="white">
                            <p class="author-link"><a href="{{ route('authors.show', $quote->author->id) }}">{{ $quote->author->name }}</a></p>
                            <h4>Added on</h4>
                            <hr class="white">
                            <p>{{ $quote->created_at->format('l, F jS, Y') }}</p>
                            <h4>Link</h4>
                            <hr class="white">
                            <p>Web:</p>
                            <p class="font-14"><code class="language-markup">{{ Request::root() }}/quotes/{{ $quote->id }}</code></p>
                            <p>API:</p>
                            <p class="font-14"><code class="language-markup">{{ Request::root() }}/api/quotes/{{ $quote->id }}</code></p>
                        </div>
                    </div>
                    <div class="col s12 m4">
                        @if($quote->author->hasMoreQuotes())
                            <div class="quotes__top-sidebar--wrap">
                                <h5>More from this author</h5>
                                <hr class="white">
                                @foreach($quote->author->getRandomQuotes() as $quote)
                                    <p class="quote-text quote-link"><a href="{{ route('quotes.show', $quote->id) }}">"{{ $quote->text }}"</a></p>
                                @endforeach
                            </div>
                        @endif
                        <div class="quotes__bottom-sidebar--wrap">
                            <h5>Other authors</h5>
                            <hr class="white">
                            @foreach($otherAuthors as $author)
                                <p class="author-link"><a href="{{ route('authors.show', $author->id) }}">{{ $author->name }}</a></p>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection