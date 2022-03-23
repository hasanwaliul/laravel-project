<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class HomeController extends Controller
{
    public function index(){
        return view('welcome');
    }
    // public function about($company, $address){
    //     // echo "$company and $address";
    //     $data['company'] = $company;
    //     $data['address'] = $address;
    //     return view('about', $data);
    // }

    // public function about(Request $request){
    //     // echo $request->company;
    //     $data['company'] = $request->company;
    //     $data['address'] = $request->address;
    //     return view('about', $data);
    // }


    public function about(Request $request){
        $data['users'] = User::all();
        $data['company'] = $request->company;
        $data['address'] = $request->address;
        return view('about', $data);
    }
    public function contact(){
        return view('contact');
    }
    public function login(){
        return view('login');
    }
}
