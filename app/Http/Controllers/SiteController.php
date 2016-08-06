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

    public function clinicsProfile(){
        return view('clinics-profile');
    }

    public function memberProfile(){
        return view('member-profile');
    }

    public function profileIndex(){
      return view('profile.index');
    }

    public function profileSettings(){
      return view('profile.profile-settings');
    }

    public function profileEdit(){
      return view('profile.profile-edit');
    }

    public function profileDelete(){
      return view('profile.profile-delete');
    }

    public function profileViewpets(){
      return view('profile.profile-viewpets');
    }

    public function profileChangephoto(){
      return view('profile.profile-changephoto');
    }

}
