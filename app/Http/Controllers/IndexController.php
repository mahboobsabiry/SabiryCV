<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MyInfo;
use App\Education;
use App\Experience;
use App\Skill;
use App\ClientReview;
use App\Mail\NewMessageMail;
use Illuminate\Support\Facades\Mail;

class IndexController extends Controller
{
    public function index()
    {
    	$infos = MyInfo::pluck('value', 'key');
    	$education = Education::all();
    	$experience = Experience::all();
    	$skills = Skill::all();
    	$clients = ClientReview::latest()->take(1)->get();
    	return view('index', compact('infos', 'education', 'experience', 'skills', 'clients'));
    }

    public function contactMe()
    {
    	Mail::to('m.sabiry1997@gmail.com')->send(new NewMessageMail($data));

        return response()->json(['success' => 'Your message successfully sent, please wait for response.'], 200);
    }
}
