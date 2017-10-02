<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slider;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $slides = Slider::where('status', '=', 'no')->orderBy('updated_at', 'desc')->get();

        return view('home', compact('slides'));
    }
}
