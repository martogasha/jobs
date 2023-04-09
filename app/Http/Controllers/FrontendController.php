<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function jobs(){
        return view('frontend.jobs');
    }
    public function jobDetail(){
        return view('frontend.jobDetail');
    }
    public function cvs(){
        return view('frontend.cvs');
    }
    public function shop(){
        return view('frontend.shop');
    }
    public function news(){
        return view('frontend.news');
    }
}
