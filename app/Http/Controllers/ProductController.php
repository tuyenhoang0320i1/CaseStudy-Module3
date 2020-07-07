<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    protected $product;
    public function __construct(Product $product)
    {
        $this->product=$product;
    }
    public function index()
    {
        $products = $this->product->all();
        return view('admin.user.home',compact('products'));
    }
    public function create()
    {

    }

    public function edit()
    {

    }
     public function delete()
     {

     }
}
