<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\CreateQuoteFormRequest;
use App\Quote;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class QuotesController extends Controller
{
    public function getIndex(Quote $quote)
    {
        return response()->json($quote->all()->load('author'), 200);
    }

    public function postStore(CreateQuoteFormRequest $request, Quote $quote)
    {
        return response()->json($quote->createQuote($request)->load('author'), 200);
    }

    public function getShow($id, Quote $quote)
    {
        return response()->json($quote->findOrFail($id)->load('author'), 200);
    }

    public function postUpdate()
    {

    }

    public function postDestroy()
    {

    }

    public function getRandom(Quote $quote)
    {
        return response()->json($quote->inRandomOrder()->first()->load('author'), 200);
    }
}
