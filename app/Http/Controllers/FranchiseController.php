<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FranchiseController extends Controller
{
    //
    public function competitive(){
        return view('franchise.competitive');
    }
    public function join(){
        return view('franchise.join');
    }
    public function cost(){
        return view('franchise.cost');
    }
    public function guid(){
        return view('franchise.guid');
    }
    public function explain(){
        return view('franchise.explain');
    }
}
