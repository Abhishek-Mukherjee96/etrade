<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    //LOAD HOME PAGE
    public function index(){
        return view('frontend.index');
    }

    //LOAD PRODUCT DETAILS PAGE
    public function product_details(){
        return view('frontend.product-details');
    }
}
