<?php

namespace App\Http\Controllers;

use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;

use Illuminate\Http\Request;
use App\Slider;
use App\Text;
use App\Background;
use App\Image;
class ContentController extends Controller
{
    //show homepage
    public function homePage()
    {
    	$slides = Slider::where('status', '=', 'no')->orderBy('updated_at', 'desc')->get();

        return view('home-page', compact('slides'));

    }

    public function aboutUsPage()
    {
        $text = Text::where('page', '=', 'about')->first();
        $background = Background::where('page', '=', 'about')->first();
        $images = Image::where('page', '=', 'about')->get();

        //return $text;
        return view('about-page', compact('text', 'background', 'images'));
    }

    public function servicesPage()
    {
        
    }
}
