<?php

namespace App\Http\Controllers;

use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;

use Illuminate\Http\Request;
use App\Slider;
use App\Text;
use App\Background;
use App\Image;
use App\Service;
use App\Journal;
use App\Project;

class ContentController extends Controller
{
    public function image()
    {
        return view('image');
    }
    //show homepage
    public function homePage()
    {
    	$slides = Slider::where('status', '=', 'no')->orderBy('updated_at', 'desc')->get();

        return view('home-page', compact('slides'));

    }

    public function aboutUsPage()
    {
        $text = Text::where('page', '=', 'about')->first();
        //$background = Background::where('page', '=', 'about')->first();
        $images = Image::where([['page', '=', 'about'],['status', '=', 'no']])->get();

        //return $text;
        return view('about-page', compact('text', 'images'));
    }

    public function servicesPage()
    {
        $cservice = Service::where('title', '=', 'construction')->first();
        $fservice = Service::where('title', '=', 'furniture')->first();
        $pservice = Service::where('title', '=', 'plumbing')->first();
        //$background = Background::where('page', '=', 'service')->first();
        $cimages = Image::where([['page', '=', 'construction'],['status', '=', 'no']])->get();
        $pimages = Image::where([['page', '=', 'plumbing'],['status', '=', 'no']])->get();
        $fimages = Image::where([['page', '=', 'furniture'],['status', '=', 'no']])->get();

        //return $pimages;
        return view('service-page', compact('cservice','fservice','pservice', 'cimages', 'pimages', 'fimages'));
    }

    public function journalPage()
    {
        $journals = Journal::orderBy('created_at','desc')->get();

        return view('journal-page', compact('journals'));
    }

    public function journalEntry(Request $request)
    {
        if($request->id){
            $journal = Journal::where('id', '=', $request->id)->first();

             return view('journal-entry', compact('journal'));
        }
        else{

            return redirect('/journal');
        }
     
    }

    public function projectsPage()
    {
        $projects = Project::orderBy('created_at','desc')->get();

        return $projects;
        return view('project-page', compact('projects'));
    }

    public function projectEntry(Request $request)
    {
        if($request->id){
            $project = Project::where('id', '=', $request->id)->first();
            $images = Image::where('page', '=', $request->id)->get();
 
            //return $images; 
            return view('project-entry', compact('project', 'images'));
        }
        else{

            return redirect('/project');
        }
     
    }
  

    public function contactPage()
    {
        
    }
}
