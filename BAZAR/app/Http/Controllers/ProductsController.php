<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

session_start();
class ProductsController extends Controller
{
    
    public function sellStep1(Request $request){
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'color' => 'required',
            'category' => 'required',
            'condition' => 'required',
            'height' => 'required',
            'width' => 'required',
            'depth' => '',
            'price' => 'required',
            'onSale' => '',
            'priceBefore' => '',
            'priceAfter' => '',
            'img1' => 'required',
            'img2' => '',
            'img3' => '',
        ]);
        $sell=[
            'title'=>$request->input('title'),
            'description' =>$request->input('description'),
            'color' =>$request->input('color'),
            'category' =>$request->input('category'),
            'condition' =>$request->input('condition'),
            'height' =>$request->input('height'),
            'width' =>$request->input('width'),
            'depth' => $request->input('depth'),
            'price' =>$request->input('price'),
            'onSale' => $request->input('onSale'),
            'priceBefore' => $request->input('priceBefore'),
            'priceAfter' => $request->input('priceAfter'),
            'img1' =>$request->input('img1'),
            'img2' => $request->input('img2'),
            'img3' => $request->input('img3'),
        ];
        $_SESSION["sell"]=$sell;
        return view('layouts.uploadPiece2');
    }

    public function sellStep2(Request $request){
        $this->validate($request, [
            'country' => 'required',
            'city' => 'required',
            'address' => 'required',
            'phone-no' => 'required|string|min:9|max:14',
        ]);
        $sell1=$_SESSION["sell"];
        $sell2=array(
            'country'=>$request->input('country'),
            'city' =>$request->input('city'),
            'address' =>$request->input('address'),
            'phone-no' =>$request->input('phone-no'),
        );
        $sell=array_merge($sell1,$sell2);
        $_SESSION["sell"]=$sell;
        return view('layouts.shop');
    }
}
