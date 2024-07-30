<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function goproducts() {
        return view('product-list');
    }
    public function goproduct($id) {
        return view('product-details', ['id'=>$id]);
    }
}
