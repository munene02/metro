<?php

namespace App\Http\Controllers;

use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;

use Illuminate\Http\Request;
use App\Slider;
class ContentController extends Controller
{
    //show homepage
    public function homePage()
    {
    	$slides = Slider::where('status', '=', 'no')->get();

        return view('home-page', compact('slides'));

        // $client = new Client();

        // $res = $client->request('GET', 'https://jsonplaceholder.typicode.com/users')->getBody();

        // $response = json_decode($res);

        // foreach ($response as $res) {
        // 	foreach ($res->address->geo as $g) {
        // 		echo $g;
        // 	}
        // }

        // //return $res;

        // // foreach ($response as $k => $v) {
        // // 	print_r($v['address']['geo']);
        // // 	//echo $v->name;

        // // }

        //echo $response->getContents();

    }
}
