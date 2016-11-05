<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;

use App\Author;
use App\Http\Controllers\Controller;

class AuthorsController extends Controller
{
    public function getIndex(Author $author)
    {
        return response()->json($author->all()->load('quotes'), 200);
    }

    public function getShow($id, Author $author)
    {
        return response()->json($author->findOrFail($id)->load('quotes'), 200);
    }

    public function getRandom(Author $author)
    {
        return response()->json($author->inRandomOrder()->first()->load('quotes'), 200);
    }
}
