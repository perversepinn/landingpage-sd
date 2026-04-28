<?php

namespace App\Http\Controllers;

use App\Models\Facility;
use App\Models\Announcement;
use App\Models\Gallery;
use App\Models\Contact;

class HomeController extends Controller
{
    public function index()
    {
        return view('welcome', [
            'facilities' => Facility::all(),
            'announcements' => Announcement::all(),
            'galleries' => Gallery::all(),
            'contact' => Contact::first(),
        ]);
    }
}