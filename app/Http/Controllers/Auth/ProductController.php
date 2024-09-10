<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function parokiaPage()
    {
        return view('products.parokia');
    }
    public function religioPage()
    {
        return view('products.religio');
    }
    public function cathedraPage()
    {
        return view('products.cathedra');
    }
    public function charismaPage()
    {
        return view('products.charisma');
    }
}
