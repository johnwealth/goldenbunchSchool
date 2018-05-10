<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller {

   public function index()
       {
        return view('pages.welcome');
       }


   public function about()
       {
        return view('pages.about');
       }


   public function academics()
       {
        return view('pages.academics');
       }

   public function admission()
       {
        return view('pages.admission');
       }

   public function contact()
       {
        return view('pages.contact');
       }

   public function portal()
       {
        return view('pages.portal');
       }


       
   public function director()
       {
        return view('pages.director');
       }

    
   public function extra()
       {
        return view('pages.extra');
       }
}

  