<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slider;
use App\Text;
use App\Image;
use App\Service;
use App\Journal;
use App\Project;
use App\Photo;
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

		alert()->success('Slider Added', 'The Slider has been successfully added.');
     
        return redirect('/home');
		

    }
    public function imageAdd(Request $request)
    {

        $request->file('slider');
        $extension = $request->file('slider')->extension();

        $time = Carbon::now()->timestamp;
        $name = $time.'.'.$extension;

        $request->slider->storeAs('public', $name);
        $url = Storage::url($name);


        alert()->success($name.' Added', 'The Image has been successfully added.');
     
        return redirect('/image');  

    }

    //About US
    public function about()
    {
        $text = Text::where('page', '=', 'about')->first();
        $images = Image::where([['page', '=', 'about'],['status', '=', 'no']])->get();

        return view('about', compact('text', 'images'));
    }

    public function saveAbout(Request $request)
    {
        $this->validate($request, [
            'text' => 'required',

        ],
        [
            'text.required' => 'About Us field is empty',
       
        ]);

        Text::where('page', 'about')->update(['text' => $request->text]); 

        alert()->success('Edit Successful', 'ABOUT US has been changed');

        return redirect('/about');
    }
    public function newAboutImage(Request $request)
    {
        $request->file('image');

        $extension = $request->file('image')->extension();

        $time = Carbon::now()->timestamp;
        $name = $time.'.'.$extension;

        $request->image->storeAs('public', $name);
        $url = Storage::url($name);

        $image = new Image;
        $image->image = $url;
        $image->page = 'about';
        $image->caption = $request->caption;
        $image->status = 'no';
        $image->save();

        alert()->success('Image Added', 'About Us Image has been successfully ADDED.');
     
        return redirect('/about');
    }

    public function removeAboutImage(Request $request)
    {
        
        Image::where('id', $request->id)->update(['status' => 'yes']); 
        alert()->success('Image Removed', 'About Us Image has been successfully REMOVED.');
     
        return redirect('/about');
    }

    //SERVICE
    public function service()
    {
        $cservice = Service::where('id', '=', '1')->first();
        $pservice = Service::where('id', '=', '2')->first();
        $fservice = Service::where('id', '=', '3')->first();

        $cimages = Image::where([['page', '=', '1'],['status', '=', 'no']])->get();
        $pimages = Image::where([['page', '=', '2'],['status', '=', 'no']])->get();
        $fimages = Image::where([['page', '=', '3'],['status', '=', 'no']])->get();

        return view('service', compact('cservice','fservice','pservice', 'cimages', 'pimages', 'fimages'));
    }

    // 1
    public function save1(Request $request)
    {
        $this->validate($request, [
            'description' => 'required',
            'title' => 'required',
        ],
        [
            'description.required' => 'Description field is empty', 
            'title.required' => 'Title field is empty',    
        ]);

        Service::where('id', '1')->update(['description' => $request->description]);
        Service::where('id', '1')->update(['title' => $request->title]); 

        alert()->success($request->title.' SAVED', 'Text has been successfully changed.');

        return redirect('/service');
    }

    public function new1Image(Request $request)
    {
        $request->file('image');

        $extension = $request->file('image')->extension();

        $time = Carbon::now()->timestamp;
        $name = $time.'.'.$extension;

        $request->image->storeAs('public', $name);
        $url = Storage::url($name);

        $image = new Image;
        $image->image = $url;
        $image->page = '1';
        $image->caption = $request->caption;
        $image->status = 'no';
        $image->save();

        alert()->success($request->caption.' Image Added','Image has been successfully ADDED.');
     
        return redirect('/service');
    }

    public function remove1Image(Request $request)
    {
        
        Image::where('id', $request->id)->update(['status' => 'yes']); 
        alert()->success('Image Removed', 'Image has been successfully REMOVED.');
     
        return redirect('/service');
    }

    // 2
    public function save2(Request $request)
    {
        $this->validate($request, [
            'description' => 'required',
            'title' => 'required',
        ],
        [
            'description.required' => 'Description field is empty', 
            'title.required' => 'Title field is empty',    
        ]);

        Service::where('id', '2')->update(['description' => $request->description]);
        Service::where('id', '2')->update(['title' => $request->title]); 

        alert()->success($request->title.' SAVED', 'Text has been successfully changed.');

        return redirect('/service');
    }

    public function new2Image(Request $request)
    {
        $request->file('image');

        $extension = $request->file('image')->extension();

        $time = Carbon::now()->timestamp;
        $name = $time.'.'.$extension;

        $request->image->storeAs('public', $name);
        $url = Storage::url($name);

        $image = new Image;
        $image->image = $url;
        $image->page = '2';
        $image->caption = $request->caption;
        $image->status = 'no';
        $image->save();

        alert()->success($request->caption.' Image Added', 'Image has been successfully ADDED.');
     
        return redirect('/service');
    }

    public function remove2Image(Request $request)
    {
        
        Image::where('id', $request->id)->update(['status' => 'yes']); 
        alert()->success('Image Removed', 'Image has been successfully REMOVED.');
     
        return redirect('/service');
    }

    //3
    public function save3(Request $request)
    {
        $this->validate($request, [
            'description' => 'required',
            'title' => 'required',
        ],
        [
            'description.required' => 'Description field is empty', 
            'title.required' => 'Title field is empty',    
        ]);

        Service::where('id', '3')->update(['description' => $request->description]);
        Service::where('id', '3')->update(['title' => $request->title]); 

        alert()->success($request->title.' SAVED', 'Text has been successfully changed.');

        return redirect('/service');
    }

    public function new3Image(Request $request)
    {
        $request->file('image');

        $extension = $request->file('image')->extension();

        $time = Carbon::now()->timestamp;
        $name = $time.'.'.$extension;

        $request->image->storeAs('public', $name);
        $url = Storage::url($name);

        $image = new Image;
        $image->image = $url;
        $image->page = '3';
        $image->caption = $request->caption;
        $image->status = 'no';
        $image->save();

        alert()->success($request->caption.' Image Added', 'Image has been successfully ADDED.');
     
        return redirect('/service');
    }

    public function remove3Image(Request $request)
    {
        
        Image::where('id', $request->id)->update(['status' => 'yes']); 
        alert()->success('Image Removed', 'Image has been successfully REMOVED.');
     
        return redirect('/service');
    }

    //sliders
    public function saveSlider(Request $request)
    {
        $this->validate($request, [
            'caption' => 'required',
            'title' => 'required',
        ],
        [
            'description.required' => 'Caption field is empty', 
            'title.required' => 'Title field is empty',    
        ]);

        Slider::where('id', $request->id)->update(['caption' => $request->caption]);
        Slider::where('id', $request->id)->update(['title' => $request->title]); 

        alert()->success('Slider Text SAVED', 'Slider Text has been successfully changed.');

        return redirect('/home');
    }

    public function removeSlider(Request $request)
    {
        Slider::where('id', $request->id)->update(['status' => 'yes']); 
        alert()->success('Slider Image Removed', 'Image has been successfully REMOVED.');
     
        return redirect('/home');
    }

    //Project
    public function project()
    {
        $projects = Project::where('status','no')->orderBy('created_at','desc')->get();

        return view('project', compact('projects'));
    }

    public function editProject(Request $request)
    {
        if($request->id){
            $project = Project::where('id', '=', $request->id)->first();
            $photos = Photo::where([['project_id', '=', $request->id],['status', '=', 'no']])->get();

            return view('projectId', compact('project', 'photos'));
        }
        else{

            return redirect('/project');
        }
    }

    public function saveProject(Request $request)
    {
        Project::where('id', $request->id)->update(['title' => $request->title]);
        Project::where('id', $request->id)->update(['details' => $request->details]);

        alert()->success('Project Details SAVED', 'The project has been successfully changed.');

        return redirect('/editProject/'.$request->id);
    }

    public function removePhoto(Request $request)
    {
        Photo::where('id', $request->id)->update(['status' => 'yes']); 
        alert()->success('Project Photo Removed', 'Image has been successfully REMOVED.');
     
        return redirect('/project');
    }

    public function addPhoto(Request $request)
    {
        $project = Project::where('id', '=', $request->id)->first();
        return view('addPhoto', compact('project'));
    }

    public function savePhoto(Request $request)
    {
       $request->file('photo');
        $extension = $request->file('photo')->extension();

        $time = Carbon::now()->timestamp;
        $name = $time.'.'.$extension;

        $request->photo->storeAs('public', $name);
        $url = Storage::url($name);

        $photo = new Photo;
        $photo->project_id = $request->id;
        $photo->photo = $url;
        $photo->status = 'no';
        $photo->save();

        alert()->success('Project Photo Added', 'The Photo has been successfully added.');
     
        return redirect('/project'); 
    }

    public function changeCover(Request $request)
    {
        $project = Project::where('id', '=', $request->id)->first();
        return view('changeCover', compact('project'));
    }

    public function saveCover(Request $request)
    {
       $request->file('photo');
        $extension = $request->file('photo')->extension();

        $time = Carbon::now()->timestamp;
        $name = $time.'.'.$extension;

        $request->photo->storeAs('public', $name);
        $url = Storage::url($name);

        Project::where('id', $request->id)->update(['cover' => $url]);

        alert()->success('Project Cover Changed', 'The Project Cover has been successfully changed.');
     
        return redirect('/project'); 
    }

    public function addProject(Request $request)
    {
        $request->file('cover');
        $extension = $request->file('cover')->extension();

        $time = Carbon::now()->timestamp;
        $name = $time.'.'.$extension;

        $request->cover->storeAs('public', $name);
        $url = Storage::url($name);

        $project = new Project;
        $project->title = $request->title;
        $project->details = $request->details;
        $project->cover = $url;
        $project->status = 'no';
        $project->save();

        alert()->success('New Project Added', 'The New Project has been successfully changed.');
     
        return redirect('/project');
    }

    public function removeProject(Request $request)
    {
        Project::where('id', $request->id)->update(['status' => 'yes']); 
        alert()->success('Project Removed', 'The Project has been successfully REMOVED.');
     
        return redirect('/project');
    }

}
