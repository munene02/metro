<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slider;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function newSlider(Request $request)
    {

    	$request->file('slider');
    	$extension = $request->file('slider')->extension();

    	$time = Carbon::now()->timestamp;
    	$name = $time.'.'.$extension;

    	$request->slider->storeAs('public', $name);
    	$url = Storage::url($name);

    	$slider = new Slider;
    	$slider->image = $url;
    	$slider->title = $request->title;
		$slider->caption = $request->caption;
		$slider->status = 'no';
		$slider->save();

		alert()->success('Slider Added', 'The Slider was successfully added.');
     
        return redirect('/home');
		

    }
}
