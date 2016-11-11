@extends('layouts.main')

@section('content')
    <div class="landing__header--container">
        <div class="landing__header--wrap">
            <div class="container">
                <div class="headline-quote--wrap">
                    <h4 class="headline-quote">My friend asked me if I wanted a frozen banana, I said 'no, but I want a regular banana later, so ... yeah'</h4>
                    <hr>
                    <p class="headline-author">- Mitch Hedberg</p>
                </div>
            </div>
        </div>
    </div>
    <div class="landing__second--container">
        <div class="landing__second--wrap">
            <div class="container">
                <h3>About Uptilt Quotes</h3>
                <div class="row">
                    <div class="col s12 m12 l6">
                        <p class="font-21">
                            Uptilt Quotes is a project that I always fathomed I would start, yet never got around to.
                            {{--There have been a few times where I have thought that it would be handy to have a way to pull a quote of some kind from an API for a specific project.--}}
                            {{--Not only pulling a quote, but being able to easily publish one as well.--}}
                            There have been times where I've scoured the web trying to find the perfect quote API. Something that would allow me to pull quotes easily, as well as upload my own as I come across them.
                            I never did find a suitable solution for what I was interested in. As such, I decided to spin up my own project for this.
                            I've designed this to be a simple, elegant solution for handling my needs. We live in a world where everyone has ended up with a separate account for everything.
                            I didn't want this to be something that you would have to sign up for. Simply enter a quote, then submit it. That's it.
                        </p>
                        <p class="font-21">
                            If you would like to browse the quotes currently in the database then head over to the Quotes section. Likewise, a list of authors can be found under the authors under, you guess it, the Authors section.
                        </p>
                    </div>
                    <div class="col s12 m12 l6">
                        <div class="card-panel example-response">
                            <h5 class="black-text">Example response</h5>
                            <pre class="black-text font-14">
{
  "id": 1,
  "text": "Some quote here",
  "author_id": 1,
  "created_at": "2016-11-11 17:21:03",
  "updated_at": "2016-11-11 17:21:03",
  "author": {
    "id": 1,
    "name": "This is the author",
    "created_at": "2016-11-11 17:21:03",
    "updated_at": "2016-11-11 17:21:03"
  }
}
                            </pre>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <h4>Form</h4>
                    {{ Form::open(['route' => 'quotes.store', 'method' => 'post']) }}
                    {!! app('captcha')->display() !!}
                    <button type="submit">Submit</button>
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
@endsection