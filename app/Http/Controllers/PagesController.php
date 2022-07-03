<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view('index');
    }
    
    public function about_us()
    {
        return view('frontend.about_us');
    }
    
    public function contact_us()
    {
        return view('frontend.contact_us');
    }
    
    public function registration()
    {
        return view('frontend.registration');
    }
}
