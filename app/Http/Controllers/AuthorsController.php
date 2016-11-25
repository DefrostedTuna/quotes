<?php

namespace App\Http\Controllers;

use App\Author;
use App\Quote;
use Illuminate\Pagination\Paginator;
use Illuminate\Http\Request;

class AuthorsController extends Controller
{
    public function getIndex(Author $author)
    {
        $authors = $author->orderBy('name')->paginate(20);

        return view('authors.index')
            ->with('authors', $authors);
    }

    public function getShow($id, Author $author)
    {
        $author = $author->findOrFail($id);
        $quotes = $author->quotes;

        return view('authors.show')
            ->with('author', $author)
            ->with('quotes', $quotes);
    }
}
