<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        $data = [
            'menu'      => $this->menu->select('title')->where('active', 1)->where('url', '/')->first(),
        ];

        return view('index', $data);
    }
    
    public function about_us()
    {
        $data = [
            'menu'          => $this->menu->select('title')->where('active', 1)->where('url', '/tentang-kami')->first(),
            'provider'      => $this->provider->where('active', 1)->first(),
        ];

        return view('frontend.about_us', $data);
    }
    
    public function contact_us()
    {
        $data = [
            'menu'          => $this->menu->select('title')->where('active', 1)->where('url', '/kontak-kami')->first(),
            'provider'      => $this->provider->where('active', 1)->first(),
        ];

        return view('frontend.contact_us', $data);
    }
    
    public function registration()
    {
        $data = [
            'menu'          => $this->menu->select('title')->where('active', 1)->where('url', '/registrasi')->first(),
        ];
        
        return view('frontend.registration');
    }

    public function dashboard()
    {
        $data = [
            'path'      => '/adm-dashboard',
        ];

        return view('admin.index', $data);
    }
}
