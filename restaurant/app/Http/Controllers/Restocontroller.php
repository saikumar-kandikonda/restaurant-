<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Models\restaurant;

class Restocontroller extends Controller
{
    //
    public function welcome()
    {
        return view('home');
    }
    public function list()
    {
        $data=restaurant::all();
        return view('list',["data"=>$data]);
    }
    public function add(request $req)
    {

        $data= new restaurant;
        $data->name=$req->name;
        $data->email=$req->email;
        $data->address=$req->address;
        $data->save();
        $req->session()->flash('status','Restuarant has been added successfully');
        return redirect('list');
    }
    public function register()
    {
        return view('home');
    }
    public function login()
    {
        return view('home');
    }
}
