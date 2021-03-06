<?php

namespace App\Http\Controllers;

use App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function index(){
       
        return view('website.ecommerce.index');
    }

    public function products(){
       
        return view('website.ecommerce.products');
    }
    
    public function products_details(){
       
        return view('website.ecommerce.products_details');
    }

    public function cart(){
       
        return view('website.ecommerce.cart');
    }

    public function checkout(){
       
        return view('website.ecommerce.checkout');
    }

    public function wishlist(){
       
        return view('website.ecommerce.wishlist');
    }

    public function contact(){
       
        return view('website.ecommerce.contact');
    }


}
