<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function getIndex()
    {
        return view('root-index');
    }

    public function getDocs()
    {
        return view('documentation');
    }
}
