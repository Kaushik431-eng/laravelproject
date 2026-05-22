<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EbooksController extends Controller
{
    public function index(){
        return view('frontend.ebook');
    }
    public function aboute(){
        return view('frontend.aboute');
    }
    public function  contact(){
        return view('frontend.contact');
    }

    public function shop_all(){
        return view('frontend.shop_all');
    }

    public function art_design(){
        return view('frontend.art_design');
    }
    public function fiction(){
        return view('frontend.fiction');
    }
    public function no_fiction(){
        return view('frontend.art_design');
    }
    
}
