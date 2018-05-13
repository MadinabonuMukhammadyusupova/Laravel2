<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
    	return view('pages.index');
    }

    public function contact_us()
    {
    	return view('pages.contact_us');
    }

    public function registration()
    {
    	return view('pages.registration');
    }

    public function hotels()
    {
    	return view('pages.hotels');
    }

    public function places()
    {
    	return view('pages.places');
    }

    public function transportation()
    {
    	return view('pages.transportation');
    }

}
