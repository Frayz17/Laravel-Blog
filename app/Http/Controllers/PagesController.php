<?php

namespace App\Http\Controllers;


class PagesController extends Controller
{
    public function getIndex()
    {
        return view('pages.welcome');
    }
    
    public function getAbout()
    {
        $first = 'Andrey';
        $last = 'Dmitriew';
        $fullname = $first . ' ' . $last;
        
        return view('pages.about')->withFullname($fullname);
    }
    
    public function getContacts()
    {
        return view('pages.contacts');
    }
}

# process variable data to params
# talk to the model
# receive from the model
# compile or process data from the model if needed
# pass that data to the correct view