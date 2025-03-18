<?php

namespace App\Http\Controllers;

use App\Code;
use App\Http\Controllers\Controller;
use App\Service;
use App\Product;
use App\Contact;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    //
    public function index(){
  
        $messages = Contact::orderBy('id','desc')->limit('30')->get();
        $products = Product::all();
        $services = Service::all();


        return view('admin.dashboard',compact('messages','products','services'));
    }

}
