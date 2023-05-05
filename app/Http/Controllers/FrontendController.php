<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Job;
use App\Models\Product;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function jobs(){
        $jobs = Job::paginate(3);
        return view('frontend.jobs',[
            'jobs'=>$jobs
        ]);
    }
    public function jobDetail($id){
        $job = Job::find($id);
        return view('frontend.jobDetail',[
            'job'=>$job
        ]);
    }
    public function cvs(){
        return view('frontend.cvs');
    }
    public function shop(){
        $products = Product::orderBy('id','DESC')->get();
        return view('frontend.shop',[
            'products'=>$products
        ]);
    }
    public function shopDetail($id){
        $product = Product::find($id);
        return view('frontend.shopDetail',[
            'product'=>$product
        ]);
    }
    public function news(){
        return view('frontend.news');
    }
    public function newsDetail($id){
        $detail = Blog::find($id);
        return view('frontend.newsDetails',[
            'detail'=>$detail
        ]);
    }
}
