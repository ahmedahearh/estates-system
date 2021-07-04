<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Property;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
   public function index(){
    $images = Image::get();
    return view('website.index',compact('images'));
   }
}
