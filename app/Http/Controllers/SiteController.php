<?php

namespace Furandpaws\Http\Controllers;

use Illuminate\Http\Request;

use Furandpaws\Http\Requests;

class SiteController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function petStore()
    {
        return view('petstore');
    }

    public function postSale()
    {
        return view('post-sale');
    }

    public function adopt()
    {
        return view('adopt');
    }

    public function breed()
    {
        return view('breed');
    }

    public function item()
    {
        return view('item');
    }

    public function profile()
    {
        return view('profile');
    }

    public function petClinics()
    {
        return view('pet-clinics');
    }
}
