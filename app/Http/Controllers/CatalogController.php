<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CatalogController extends Controller
{
    function index(Request $request)
    {
        return view('catalog.index');
    }
}
