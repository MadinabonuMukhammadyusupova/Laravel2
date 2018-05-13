<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tourist;


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

    public function store(Request $request)
    {
        // $this->validate($request,[
        //     'hotel'=>'required|string',
        //     'transport'=>'required|string',
        //     'passportID'=>'required|string',
        //     'name'=>'required|string',
        //     'password'=>'required|confirmed|min:6',
        //     'email'=>'required|email|unique:tourists', 
        //     'duration'=>'required|integer', 
        //     'num_of_tourists'=>'required|integer', 
        //     'date'=>'required|date',
        //     'phone'=>'required|string'
        // ]);

         $tourist = new Tourist();
         $tourist->hotel=$request->input('hotel');
         $tourist->transport=$request->input('transport');
         $tourist->passportID=$request->input('passportID');
         $tourist->name=$request->input('name');
         $tourist->password=bcrypt($request->input('password'));
         $tourist->email=$request->input('email');
         $tourist->num_of_tourists=$request->input('num_of_tourists');
         $tourist->date=$request->input('date');
         $tourist->duration=$request->input('duration');
         $tourist->phone=$request->input('phone');
         $tourist->save();
        return redirect('/contact_us');
    }
  

}
