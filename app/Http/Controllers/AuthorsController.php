<?php

namespace App\Http\Controllers;

use App\Author;
use Illuminate\Http\Request;

class AuthorsController extends Controller
{
    public function getIndex(Author $author)
    {
        $authors = $author->all();
        return view('authors.index')
            ->with('authors', $authors);
    }
}
