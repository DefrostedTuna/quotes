<?php

namespace App\Http\Controllers;

use App\Author;
use App\Http\Requests\CreateQuoteFormRequest;
use App\Quote;
use Illuminate\Http\Request;

class QuotesController extends Controller
{
    public function getIndex(Quote $quote)
    {
        $quotes = $quote->orderBy('created_at', 'desc')->paginate(25);

        return view('quotes.index')
            ->with('quotes', $quotes);
    }

    public function getCreate()
    {
        return view('quotes.create');
    }

    public function postStore(CreateQuoteFormRequest $request, Quote $quote)
    {
        return response()->json($quote->createQuote($request), 200);
    }

    public function getShow($id, Quote $quote, Author $author)
    {
        $quote = $quote->findOrFail($id);
        $otherAuthors = $author->inRandomOrder()->take(5)->get();

        return view('quotes.show')
            ->with('quote', $quote)
            ->with('otherAuthors', $otherAuthors);
    }
}
