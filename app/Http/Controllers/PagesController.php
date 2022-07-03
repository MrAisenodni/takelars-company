<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    // This Controller for Homepage
    public function index()
    {
        return view('index');
    }
}
