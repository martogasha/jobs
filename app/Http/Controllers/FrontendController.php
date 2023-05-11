<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Job;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FrontendController extends Controller
{
    public function jobs(){
        $jobs = Job::orderBy('id','DESC')->paginate(4);
        $bls = Blog::orderBy('id','DESC')->paginate(4);
        return view('frontend.jobs',[
            'jobs'=>$jobs,
            'bls'=>$bls
        ]);
    }
    public function jobDetail($id){
        $job = Job::find($id);
        $bls = Blog::orderBy('id','DESC')->paginate(4);

        return view('frontend.jobDetail',[
            'job'=>$job,
            'bls'=>$bls

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
        $blogs = Blog::orderBy('id','DESC')->paginate(4);
        $bls = Blog::orderBy('id','ASC')->paginate(5);
        return view('frontend.news',[
            'blogs'=>$blogs,
            'bls'=>$bls
        ]);

    }
    public function newsDetail($id){
        $detail = Blog::find($id);
        $bls = Blog::orderBy('id','DESC')->paginate(4);
        return view('frontend.newsDetails',[
            'detail'=>$detail,
            'bls'=>$bls,

        ]);
    }
}
