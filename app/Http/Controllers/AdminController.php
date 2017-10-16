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
use App\Team;
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
        $teams = Team::where('status', '=', 'no')->get();

        return view('about', compact('text', 'images', 'teams'));
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

    public function addTeamMate(Request $request)
    {
        $request->file('photo');
        $extension = $request->file('photo')->extension();

        $time = Carbon::now()->timestamp;
        $name = $time.'.'.$extension;

        $request->photo->storeAs('public', $name);
        $url = Storage::url($name);

        $team = new Team;
        $team->name = $request->name;
        $team->details = $request->details;
        $team->photo = $url;
        $team->status = 'no';
        $team->save();

        alert()->success('New Team Member Added', 'The New Team Member has been successfully ADDED.');
     
        return redirect('/about');
    }
    public function saveTeamMate(Request $request)
    {
        $this->validate($request, [
            'details' => 'required',
            'name' => 'required'

        ],
        [
            'name.required' => 'Name field is empty',
            'details.required' => 'Details field is empty',
       
        ]);

        Team::where('id', $request->id)->update(['details' => $request->details]);
        Team::where('id', $request->id)->update(['name' => $request->name]); 

        alert()->success('Edit Successful', 'Tema Member Detaisl have been changed');

        return redirect('/about');
    }
    public function removeTeamMate(Request $request)
    {
        Team::where('id', $request->id)->update(['status' => 'yes']); 
        alert()->success('Team Member Removed', 'The Team Member has been successfully REMOVED.');
     
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

        alert()->success('New Project Added', 'The New Project has been successfully ADDED.');
     
        return redirect('/project');
    }

    public function removeProject(Request $request)
    {
        Project::where('id', $request->id)->update(['status' => 'yes']); 
        alert()->success('Project Removed', 'The Project has been successfully REMOVED.');
     
        return redirect('/project');
    }

    //journal
    public function journal()
    {
        $journals = Journal::where('status','no')->orderBy('created_at','desc')->get();

        return view('journal', compact('journals'));
    }

    public function addJournal(Request $request)
    {
        $request->file('cover');
        $extension = $request->file('cover')->extension();

        $time = Carbon::now()->timestamp;
        $name = $time.'.'.$extension;

        $request->cover->storeAs('public', $name);
        $url = Storage::url($name);

        $journal = new Journal;
        $journal->title = $request->title;
        $journal->description = $request->description;
        $journal->details = $request->details;
        $journal->cover = $url;
        $journal->status = 'no';
        $journal->save();

        alert()->success('New Journal Added', 'The New Journal Entry has been successfully ADDED.');
     
        return redirect('/journal');
    }

    public function editJournal(Request $request)
    {
        if($request->id){
            $journal = Journal::where('id', '=', $request->id)->first();

            return view('journalId', compact('journal'));
        }
        else{

            return redirect('/journal');
        }
    }

    public function saveJournal(Request $request)
    {
        Journal::where('id', $request->id)->update(['title' => $request->title]);
        Journal::where('id', $request->id)->update(['description' => $request->description]);
        Journal::where('id', $request->id)->update(['details' => $request->details]);

        alert()->success('Journal Details SAVED', 'The Journal has been successfully changed.');

        return redirect('/editJournal/'.$request->id);
    }

    public function removeJournal(Request $request)
    {
        Journal::where('id', $request->id)->update(['status' => 'yes']); 
        alert()->success('Journal Removed', 'The Journal has been successfully REMOVED.');
     
        return redirect('/journal');
    }

    public function changeCoverJ(Request $request)
    {
        $journal = Journal::where('id', '=', $request->id)->first();
        return view('changeCoverJ', compact('journal'));
    }

    public function saveCoverJ(Request $request)
    {
       $request->file('photo');
        $extension = $request->file('photo')->extension();

        $time = Carbon::now()->timestamp;
        $name = $time.'.'.$extension;

        $request->photo->storeAs('public', $name);
        $url = Storage::url($name);

        Journal::where('id', $request->id)->update(['cover' => $url]);

        alert()->success('Journal Cover Changed', 'The Journal Cover has been successfully changed.');
     
        return redirect('/journal'); 
    }

    //Contact US
    public function contact()
    {
        $text = Text::where('page', '=', 'contact')->first();

        return view('contact', compact('text'));
    }

    public function saveContact(Request $request)
    {
        $this->validate($request, [
            'text' => 'required',

        ],
        [
            'text.required' => 'Contact field is empty',
       
        ]);

        Text::where('page', 'contact')->update(['text' => $request->text]); 

        alert()->success('Edit Successful', 'Contact has been successfully changed');

        return redirect('/contact');
    }



}
