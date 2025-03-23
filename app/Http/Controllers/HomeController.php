<?php

namespace App\Http\Controllers;

use App\Product;
use App\Service;
use App\Contact;
use App\Subscribe;
use App\Blog;
use App\Project;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        
        $products = Product::orderBy('id','Asc')->limit(9)->get();
        $projects = Project::orderBy('id','Asc')->limit(6)->get();
        $blogs = Blog::orderBy('id','desc')->get();
        return view('site.index',compact('products','blogs','projects'));
    }
   
    public function shop($category_id){
        $products = Product::where('category_id',$category_id)->orderBy('id','desc')->paginate(20);
        return view('site.shop',compact('products'));
    }
    public function allShop(){
        $products = Product::orderBy('id','desc')->get();
        return view('site.shop',compact('products'));
    }
    public function allProjects(){
        $projects = Project::orderBy('id','desc')->get();
        return view('site.projects',compact('projects'));
    }
    public function blogs(){
        $blog_last = Blog::orderBy('id','desc')->first();
        
        $blogs = Blog::where('slug','!=',$blog_last->slug)->orderBy('id','desc')->paginate(20);
        $random_blogs= Blog::inRandomOrder()->limit(5)->get();
        return view('site.blogs',compact('blogs','blog_last','random_blogs'));
    }
    public function productDetails($slug){
        $product = Product::where('slug',$slug)->first();
        $related = Product::where('slug','!=',$slug)->inRandomOrder()->limit(3)->get();
        return view('site.product_details',compact('product','related'));
    }
    public function projectDetails($slug){
        $project = Project::where('slug',$slug)->first();
        return view('site.project_details',compact('project'));
    }
    public function blogDetails($slug){
        $blog = Blog::where('slug',$slug)->first();
        $related = Blog::where('slug','!=',$slug)->inRandomOrder()->limit(8)->get();
        return view('site.blog_details',compact('blog','related'));
    }
    public function search(Request $request){
        $products = Product::where('name','like','%'.$request->param .'%')->orderBy('id','desc')->paginate(20);
        return view('site.shop',compact('products'));
    }
    public function about(){
        return view('site.about');
    }
    public function technical_data(){
        return view('site.technical_data');
    }
    public function contact(){
        return view('site.contact');
    }
    public function set_contactus(Request $request){
        $data = $request -> validate([
            'name' => 'required|string|max:100',
            'email' => 'required|string',
            'message' => 'required',

        ]);
        $data = $request->all();
        Contact::create($data);
        session() -> flash('success', trans('Sent Successfully'));
        return redirect()->back();
    }
    public function subscribe(Request $request){
        $data = $request -> validate([
            'email' => 'required|string|max:300',
        ]);
        $data = $request->all();
        Subscribe::create($data);
        session() -> flash('success', trans('Sent Successfully'));
        return redirect()->back();
    }
}
