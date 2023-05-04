<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function admin(){
        $users = User::all();
        return view('backend.index',[
            'users'=>$users
        ]);
    }
    public function adminJobs(){
        $jobs = Job::where('user_id',Auth::id())->orderBy('id','DESC')->paginate(4);
        return view('backend.job',[
            'jobs'=>$jobs
        ]);
    }
    public function adminMarket(){
        $products = Product::where('user_id',Auth::id())->orderBy('id','DESC')->get();
        return view('backend.shop',[
            'products'=>$products
        ]);
    }
    public function dashboard(){
        return view('backend.dashboard');
    }
    public function postJob(){
        return view('backend.postJob');
    }
    public function pJob(Request $request){
        $job = Job::create([
           'job_title'=>$request->input('job_title'),
           'job_location'=>$request->input('job_location'),
           'job_position'=>$request->input('job_position'),
           'job_desc'=>$request->input('job_desc'),
           'job_skills'=>$request->input('job_skills'),
           'how_to_apply'=>$request->input('how_to_apply'),
           'link'=>$request->input('link'),
           'company'=>$request->input('company'),
           'country'=>$request->input('country'),
           'user_id'=>Auth::id(),
        ]);
        return redirect(url('adminJobs'))->with('success','JOB POSTED SUCCESS');
    }
    public function adminNews(){
        return view('backend.adminNews');
    }
    public function postNews(){
        return view('backend.postNews');
    }
    public function postProduct(){
        return view('backend.postProduct');
    }
    public function pProduct(Request $request){
        $product = new Product();
                if ($request->image) {
                    $file = $request->file('image');
                    $extension = $file->getClientOriginalName();
                    $filename = time() . '.' . $extension;
                    $file->move('uploads/product/', $filename);
                    $product->image = $filename;
                }
        if ($request->imageOne) {
            $file = $request->file('imageOne');
            $extension = $file->getClientOriginalName();
            $filename = time() . '.' . $extension;
            $file->move('uploads/product/', $filename);
            $product->imageOne = $filename;
        }
        if ($request->imageTwo) {
            $file = $request->file('imageTwo');
            $extension = $file->getClientOriginalName();
            $filename = time() . '.' . $extension;
            $file->move('uploads/product/', $filename);
            $product->imageTwo = $filename;
        }
        if ($request->imageThree) {
            $file = $request->file('imageThree');
            $extension = $file->getClientOriginalName();
            $filename = time() . '.' . $extension;
            $file->move('uploads/product/', $filename);
            $product->imageThree = $filename;
        }
            $product->product_title = $request->input('product_title');
           $product->product_amount = $request->input('product_amount');
           $product->product_desc = $request->input('product_desc');
           $product->user_id = Auth::id();
           $product->save();
        return redirect(url('adminMarket'))->with('success','PRODUCT POSTED SUCCESS');
    }
    public function getJob(Request $request){
        $job = Job::find($request->id);
        return response($job);
    }
    public function deleteJob(Request $request){
        $job = Job::find($request->jobId);
        $job->delete();
        return redirect()->back()->with('success','JOB DELETED SUCCESS');
    }
}
