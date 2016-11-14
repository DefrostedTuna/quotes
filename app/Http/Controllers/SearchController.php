<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Author;
use App\Quote;

class SearchController extends Controller
{
    public function getSearchGlobal($search_string, Author $author, Quote $quote)
    {
        $authors = $author->search($search_string)->get();
        $quotes = $quote->search($search_string)->get();

        //dd($quotes);
        return view('search.global')
            ->with('authors', $authors)
            ->with('quotes', $quotes);
    }
    public function postSearchGlobal(Request $request)
    {
        return redirect()->route('search.global.get', $request->input('search'));
    }
}
