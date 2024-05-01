<?php

namespace App\Http\Controllers;

use App\Models\NewProduct;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    public function Product(){
        $viewproduct = NewProduct::all();
        return view('product',['viewproduct'=>$viewproduct]);
    }
    public function Order(){
        $viewproduct = NewProduct::all();
        return view('order',['viewproduct'=>$viewproduct]);
    }
    public function Productview(){
        $viewproduct = NewProduct::all()
        ->take(4);
        
        return view('home',['viewproduct'=>$viewproduct]);
    }
    public function Other(){
        $NewProduct = NewProduct::all()
        ->take(4);
        return view('productview',['NewProduct'=>$NewProduct]);
    }
    
}
