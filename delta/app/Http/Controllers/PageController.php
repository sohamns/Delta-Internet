<?php

namespace App\Http\Controllers;

use App\Inquiry;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('pages.home');
    }

    public function services()
    {
        return view('pages.services');
    }

    public function plans()
    {
        return view('pages.plans');
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function contact_post(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string'],
            'email' => ['required', 'string', 'email'],
            'message' => ['required'],
        ]);

        Inquiry::create($request->all());

        return redirect()->route('contact');        
    }

    public function iptv()
    {
        return view('pages.iptv');
    }
}
