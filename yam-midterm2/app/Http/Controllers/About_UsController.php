<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class About_UsController extends Controller
{
    public function index(){
        return view ('layouts/master');
    }
    // public function aboutController(){
    //     $title = "About Us";
    //     $description = 'Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate velit imperdiet dolor tempor tristique.';
    //     return view ('about_us', compact('title', 'description'));
    // }
}
