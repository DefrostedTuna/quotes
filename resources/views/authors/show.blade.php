@extends('layouts.main')

@section('content')
    <div class="full-height--container">
        <div class="full-height--wrap">
            <div class="container">
                <div class="author__showcase--wrap">
                    <h3>{{ $author->name }}</h3>
                    <hr>
                    <p class="author__showcase--quote">
                        "{{ $author->randomQuote()->text }}"
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="authors__show--container">
        <div class="authors__show--wrap">
            <div class="container relative">
                <div class="author__headline--wrap">
                    <h3>{{ $author->name }}</h3>
                    <hr class="white">
                </div>
                @foreach($quotes as $quote)
                    <div class="quote__block quote__block--hidden">
                        <a href="{{ route('quotes.show', $quote->id) }}">
                            <span class="white-text">"{{ $quote->text }}"</span>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection

@section('scripts')
<script>
    $(window).on('load scroll', function() {
        var authorOffset = $('.author__headline--wrap').offset();
        if($(this).scrollTop() >= (authorOffset.top / 3)) {
            $('.author__headline--wrap, .quote__block--hidden').css({
                'transform': 'translateX(0)',
                'opacity': 1
            });
        }
    });
</script>
@endsection