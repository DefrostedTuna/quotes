<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateQuoteFormRequest;
use App\Quote;
use Illuminate\Http\Request;

class QuotesController extends Controller
{
    public function getIndex(Quote $quote)
    {
        $quotes = $quote->all();

        return view('quotes.index')
            ->with('quotes', $quotes);
    }

    public function getCreate()
    {
        return view('quotes.create');
    }

    public function postStore(CreateQuoteFormRequest $request, Quote $quote)
    {
        dd("Quote");
        dd($quote->createQuote($request));
    }

    public function getShow($id, Quote $quote)
    {
        dd($quote->findOrFail($id));
        return view('quotes.show');
    }

    public function postUpdate()
    {

    }

    public function postDestroy()
    {

    }
}
