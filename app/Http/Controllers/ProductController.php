<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Flasher\Prime\FlasherInterface;


class ProductController extends Controller
{
    public function AllProduct()
    {
        $products = Product::all();

        return view('profile', compact('products'));
    }//end method


    public function Ratings()
    {
        return $this->hasMany('App\Models\review');
    }//end method

    


    
}
