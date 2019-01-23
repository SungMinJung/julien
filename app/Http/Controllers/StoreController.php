<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StoreController extends Controller
{
    //
    public function success(){
        return view('store.success');
    }
    public function recent(){
        return view('store.recent');
    }
    public function find(){
        return view('store.find');
    }
}
