<?php

namespace App\Http\Controllers\Api;

use App\Quote;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class QuotesController extends Controller
{
    public function getIndex(Quote $quote)
    {
        $quotes = $quote->all()->load('author');

        return response()->json($quotes, 200);
    }

    public function postStore()
    {

    }

    public function getShow()
    {

    }

    public function postUpdate()
    {

    }

    public function postDestroy()
    {

    }
}
