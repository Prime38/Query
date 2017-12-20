<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;
use App\User;

class IndexController extends Controller{

    public function users() {

        //$all_user = User::all();
        return view('users',['page'=>'2']);
    }

    public function badges(){
        return view('badges',['page'=>'3']);
    }

    public function jobs(){
    	return view('job',['page'=>'6']);
    }
    public function ask(){

        return view('ask',['page'=>'7']);
    }


    // public function test(){
    //     return view('home',['page'=>'0']);
    // }
    
}
