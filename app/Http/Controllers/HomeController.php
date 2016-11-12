<?php

namespace App\Http\Controllers;

use App\Quote;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function getIndex(Quote $quote)
    {
        $randomQuote = $quote->inRandomOrder()->first();

        return view('root-index')
            ->with('randomQuote', $randomQuote);
    }

    public function getDocs()
    {
        return view('documentation');
    }
}
