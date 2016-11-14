@extends('layouts.main')

@section('content')
    <div class="landing__header--container">
        <div class="landing__header--wrap">
            <div class="container">
                <div class="headline-quote--wrap">
                    <h4 class="headline-quote">{{ $randomQuote->text }}</h4>
                    <hr>
                    <p class="headline-author">- {{ $randomQuote->author->name }}</p>
                </div>
            </div>
        </div>
    </div>
    <div class="landing__second--container">
        <div class="landing__second--wrap">
            <div class="container">
                <h3>About Uptilt Quotes</h3>
                <div class="row">
                    <div class="col s12 l7">
                        <p class="font-21">
                            Uptilt Quotes is a project that I always fathomed I would start, yet never got around to.
                            There have been times where I've scoured the web trying to find the perfect quote API. Something that would allow me to pull quotes easily, as well as upload my own as I come across them.
                            I never did find a suitable solution for what I was interested in. As such, I decided to spin up my own project for this.
                            I've designed this to be a simple, elegant solution for handling my needs. We live in a world where everyone has ended up with a separate account for everything.
                            I didn't want this to be something that you would have to sign up for. Simply enter a quote, then submit it. That's it.
                        </p>
                        <p class="font-21">
                            If you would like to browse the quotes currently in the database then head over to the Quotes section. Likewise, a list of authors can be found under the authors under, you guessed it, the Authors section.
                        </p>
                    </div>
                    <div class="col l5 right-align hide-on-med-and-down">
                        <img id="quote-circled__1" src="{{ asset('img/quote-circled.svg') }}" alt=""> <br>
                        <img id="quote-circled__2" src="{{ asset('img/quote-circled.svg') }}" alt="">
                    </div>
                </div>
                <hr class="white large-spacer">
                <div class="row">
                    <div class="col s12 l6">
                        <h3>It really is that simple</h3>
                        <p class="font-21">All you have to do is fill out this form. Give it a shot!</p>
                        <p class="font-21">You can also send an API request if you would like to integrate this into your own application. Head over to the <strong><a href="{{ route('documentation') }}">API section</a></strong> and have a look.</p>
                        <div class="center-align hide-on-med-and-down">
                            <img class="landing__arrow-right center-align" src="{{ asset('img/arrow-right.svg') }}" alt="">
                        </div>

                    </div>
                    <div class="col s12 l6">
                        <div class="landing__form--wrap">
                            <div class="card-panel black-text">
                                <h5>Your quote</h5>
                                <p>Pssst. Make it a good one!</p>
                                <br>
                                {{ Form::open(['route' => 'quotes.store', 'method' => 'post', '@submit.prevent' => 'submitForm']) }}
                                <div class="input-field">
                                    <input id="input__author" type="text" name="author" class="validate" v-model="formInputs.author">
                                    <span v-if="formErrors['author']" class="form-error">@{{ formErrors['author'][0] }}</span>
                                    <label for="input__author">Author</label>
                                </div>
                                <div class="input-field">
                                    <textarea id="input__text" name="text" class="materialize-textarea" v-model="formInputs.text"></textarea>
                                    <span v-if="formErrors['text']" class="form-error">@{{ formErrors['text'][0] }}</span>
                                    <label for="input__text">Quote</label>
                                </div>
                                <div class="input-field">
                                    {!! app('captcha')->display() !!}
                                    <br>
                                    <span v-if="formErrors['g-recaptcha-response']" class="form-error">@{{ formErrors['g-recaptcha-response'][0] }}</span>
                                </div>
                                <br>
                                <button class="btn waves-effect waves-light right-align blue-grey darken-2" type="submit">Submit
                                    <i class="material-icons right">send</i>
                                </button>
                                {{ Form::close() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
<script>
    $(window).on('load scroll', function() {
        var header_height = parseInt($('.landing__header--container').css('height'));
        console.log(header_height);
        if ($(this).scrollTop() >= (header_height - 63)) {
            $('.nav__full--container').css({
                'background': '#37474F'
            });
            $('.nav__logo').css({
                'color': 'white'
            });
            $('.nav__links a').css({
                'color': 'white'
            });
        } else {
            $('.nav__full--container').css({
                'background': ''
            });
            $('.nav__logo').css({
                'color': ''
            });
            $('.nav__links a').css({
                'color': ''
            });
        }
    });
</script>
@endsection