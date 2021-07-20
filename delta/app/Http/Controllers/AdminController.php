<?php

namespace App\Http\Controllers;

use App\Inquiry;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $inquiries = Inquiry::paginate(10);
        return view('admin-dashboard', compact('inquiries'));
    }
}
