<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class CartController extends Controller
{
    publuc function add(Product $product){
    	dd($product);

    }
}
