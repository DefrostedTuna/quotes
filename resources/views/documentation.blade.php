@extends('layouts.main')

@section('content')
<div class="documentation--container">
    <div class="documentation--wrap">
        <div class="container">
            <h3>API Documentation</h3>
            <hr>

            <h5>Getting started</h5>
            <p>
                This is a fairly straightforward API, so I don't believe a lot of explanation is necessary.
                Retrieving a quote is as simple as sending a <code class="language-markup">GET</code> request to the proper route.
                Submitting a quote is done via a <code class="language-markup">POST</code> request to the correct route.
                For both options, you will be returned a JSON object of the database entry.
            </p>
            <p>Here are a list of the available API routes.</p>
            <p><strong>GET</strong></p>
            <p>
                <code class="language-markup">/api/quotes</code> <br>
                <code class="language-markup">/api/quotes/random</code> <br>
                <code class="language-markup">/api/quotes/{id}</code> <br> <br>
                <code class="language-markup">/api/authors</code> <br>
                <code class="language-markup">/api/authors/random</code> <br>
                <code class="language-markup">/api/authors/{id}</code>
            </p>

            <p><strong>POST</strong></p>
            <p>
                <code class="language-markup">/api/quotes</code>
            </p>

            <h5>Retrieving quotes</h5>
            <p>To retrieve a quote, simply send a <code class="language-markup">GET</code> request to the corresponding route.</p>
            <p>
                <code class="language-markup">/api/quotes</code>
                &nbsp- Retrieves all quotes <br>
                <code class="language-markup">/api/quotes/random</code>
                &nbsp- Retrieves a random quote <br>
                <code class="language-markup">/api/quotes/{id}</code>
                &nbsp- Retrieves a specific quote <br>
            </p>

            <p><strong>Example response</strong></p>
            <p>
                <pre class="language-javascript">
                    <code>
{
  "text": "This is the quote text",
  "author_id": 1,
  "updated_at": "2016-11-12 17:52:44",
  "created_at": "2016-11-12 17:52:44",
  "id": 1,
  "author": {
    "id": 1,
    "name": "Specified author here",
    "created_at": "2016-11-12 17:52:44",
    "updated_at": "2016-11-12 17:52:44"
  }
}
                    </code>
                </pre>
            </p>

            <p>You may also retrieve authors in the same fashion with their respective quotes attached.</p>

            <p>
                <code class="language-markup">/api/authors</code>
                &nbsp- Retrieves all authors <br>
                <code class="language-markup">/api/authors/random</code>
                &nbsp- Retrieves a random author <br>
                <code class="language-markup">/api/authors/{id}</code>
                &nbsp- Retrieves a specific author <br>
            </p>

            <p><strong>Example response</strong></p>
            <p>
                <pre class="language-javascript">
                    <code>
  {
    "id": 1,
    "name": "Specified author here",
    "created_at": "2016-11-12 17:52:44",
    "updated_at": "2016-11-12 17:52:44",
    "quotes": [
      {
        "id": 1,
        "text": "This is the quote text",
        "author_id": 1,
        "created_at": "2016-11-12 17:52:44",
        "updated_at": "2016-11-12 17:52:44",
      }
    ]
  }
                    </code>
                </pre>
            </p>

            <h5>Submitting quotes</h5>
            <p>Submitting a quote is relatively easy as well. Send a <code class="language-markup">POST</code> request with the following information.</p>

            <p><strong>Route</strong> <code class="language-markup">POST </code></p>
            <p>
                <code class="language-markup">/api/quotes</code>
            </p>

            <p><strong>Params</strong></p>
            <p>
                <code class="language-markup">text: "Your awesome quote here"</code> <br>
                <code class="language-markup">author: "Whoever the author is"</code>
            </p>

            <p>On a successful entry, you will be given a JSON representation of the object in response.</p>

            <p><strong>Example response</strong></p>
            <p>
                <pre class="language-javascript">
                    <code>
{
  "text": "Your awesome quote here",
  "author_id": 1,
  "updated_at": "2016-11-12 17:52:44",
  "created_at": "2016-11-12 17:52:44",
  "id": 1,
  "author": {
    "id": 1,
    "name": "Whoever the author is",
    "created_at": "2016-11-12 17:52:44",
    "updated_at": "2016-11-12 17:52:44"
  }
}
                    </code>
                </pre>
            </p>
            <p>
                <strong>Note:</strong><br>
                The author will be automatically stored as an entry.
                If there is already an author with the same name, it will be appended to their list of quotes.
            </p>

            <h5>That's it!</h5>
            <p>Go get started with everything. Submit or pull as many quotes as you like!</p>
        </div>
    </div>
</div>

@endsection