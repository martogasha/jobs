<?php

namespace App\Http\Controllers;

use App\Models\Blog;
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
    public function postNews(){
        return view('backend.postNews');
    }
    public function postNew(Request $request){
        $pictures = new Blog();
        $pictures->title = $request->input('title');
        $pictures->detail = $request->input('summary');
        $pictures->detailTwo = $request->input('detailTwo');
        $pictures->linkNameTwo = $request->input('linkNameTwo');
        $pictures->linkTwo = $request->input('linkTwo');
        $pictures->detailTitleOneLink = $request->input('detailTitleOneLink');
        $pictures->LinkNameThree = $request->input('LinkNameThree');
        $pictures->linkThree = $request->input('linkThree');
        $pictures->detailTitleOne = $request->input('detailTitleOne');
        $pictures->detailTitleTwoLink = $request->input('detailTitleTwoLink');
        $pictures->titleTwo = $request->input('titleTwo');
        $pictures->titleTwoLinkName = $request->input('titleTwoLinkName');
        $pictures->detailTitleTwo = $request->input('detailTitleTwo');
        $pictures->user_id = Auth::id();

        if ($request->image) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalName();
            $filename = time() . '.' . $extension;
            $file->move('uploads/product/', $filename);
            $pictures->image = $filename;
        }

        $pictures->save();


        return redirect()->back()->with('success','Blog Added Successfully');
    }
    public function pJob(Request $request){
        $jo = new Job();
        $jo->job_title = $request->input('job_title');
        $jo->job_location = $request->input('job_location');
        $jo->job_position = $request->input('job_position');
        $jo->job_desc = $request->name[0];
        if (isset($request->name[1])){
            $jo->bullet = $request->name[1];

        }
        if (isset($request->name[2])){
            $jo->bullet_one = $request->name[2];

        }
        if (isset($request->name[3])){
            $jo->bullet_two = $request->name[3];

        }
        if (isset($request->name[4])){
            $jo->bullet_three = $request->name[4];

        }
        if (isset($request->name[5])){
            $jo->bullet_four = $request->name[5];

        }
        if (isset($request->name[6])){
            $jo->bullet_five = $request->name[6];

        }
        if (isset($request->name[7])){
            $jo->bullet_six = $request->name[7];

        }
        if (isset($request->name[8])){
            $jo->bullet_seven = $request->name[8];

        }
        if (isset($request->name[9])){
            $jo->bullet_eight = $request->name[9];

        }
        if (isset($request->name[10])){
            $jo->bullet_nine = $request->name[10];

        }
        $jo->job_skills = $request->input('job_skills');
        $jo->how_to_apply = $request->input('how_to_apply');
        $jo->link = $request->input('link');
        $jo->company = $request->input('company');
        $jo->country = $request->input('country');
        $jo->user_id = Auth::id();
        $jo->save();
        return redirect(url('adminJobs'))->with('success','JOB POSTED SUCCESS');
    }
    public function adminNews(){
        $blogs = Blog::where('user_id',Auth::id())->orderBy('id','DESC')->get();
        return view('backend.adminNews',[
            'blogs'=>$blogs
        ]);
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
    public function getBlog(Request $request){
        $job = Blog::find($request->id);
        return response($job);
    }
    public function deleteJob(Request $request){
        $job = Job::find($request->jobId);
        $job->delete();
        return redirect()->back()->with('success','JOB DELETED SUCCESS');
    }
    public function deleteBlog(Request $request){
        $job = Blog::find($request->jobId);
        $job->delete();
        return redirect()->back()->with('success','BLOG DELETED SUCCESS');
    }
}
