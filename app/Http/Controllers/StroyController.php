<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StroyController extends Controller
{
    public function brand() {
        return view('story.brand');
    }
}
