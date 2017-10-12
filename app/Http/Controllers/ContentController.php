<?php

namespace App\Http\Controllers;

use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;

use Illuminate\Http\Request;
use App\Slider;
use App\Text;
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

    //About Us page
    public function aboutUsPage()
    {
        $text = Text::where('page', '=', 'about')->first();
        $images = Image::where([['page', '=', 'about'],['status', '=', 'no']])->get();

        //return $text;
        return view('about-page', compact('text', 'images'));
    }

    //Services Page
    public function servicesPage()
    {
        $cservice = Service::where('id', '=', '1')->first();
        $pservice = Service::where('id', '=', '2')->first();
        $fservice = Service::where('id', '=', '3')->first();
        //$background = Background::where('page', '=', 'service')->first();
        $cimages = Image::where([['page', '=', '1'],['status', '=', 'no']])->get();
        $pimages = Image::where([['page', '=', '2'],['status', '=', 'no']])->get();
        $fimages = Image::where([['page', '=', '3'],['status', '=', 'no']])->get();

        //return $pimages;
        return view('service-page', compact('cservice','fservice','pservice', 'cimages', 'pimages', 'fimages'));
    }
    
    //Journal Page
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

    //Projects Page
    public function projectsPage()
    {
        $projects = Project::orderBy('created_at','desc')->get();

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

            return redirect('/projects');
        }
     
    }
  
    //Contacts Page
    public function contactPage()
    {
        return 'hello';
    }
}
