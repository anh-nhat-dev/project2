<?php

namespace App\Http\Controllers\FrontEnd;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function getHome()
    {
        return view('frontend.index');
    }

    public function getShop()
    {
        return view('frontend.shop');
    }

    public function getAbout()
    {
        return view('frontend.about');
    }
    public function getCart()
    {
        return view('frontend.cart');
    }

    public function getContact()
    {
        return view('frontend.contact');
    }

    public function getOrderComplate()
    {
        return view('frontend.ordercomplate');
    }

    public function getProductDetail()
    {
        return view('frontend.product-detail');
    }
}
