<?php

namespace App\Http\Controllers;

use App\Models\Products;
use App\Models\Categories;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function index()
    {
        return view('layouts.home');
    }
    public function shop()
    {
        $items=Products::all();
        return view('layouts.shop', compact('items'));
    }
    public function product($id)
    {
        
        $item=Products::find($id);
        $cat=Categories::find($item->category_id);
        return view('layouts.product', compact('item','cat'));
    }
    public function about()
    {
        return view('layouts.about');
    }
    public function contact()
    {
        return view('layouts.contact');
    }
    public function uploadP1()
    {
        return view('layouts.uploadPiece1');
    }
    public function uploadP2()
    {
        return view('layouts.uploadPiece2');
    }

    public function cart(){
        $items=[];
        $items_id=$_SESSION["items"];
        foreach ($items_id as $item) {
            array_push($items, Products::find($item));
        }
        return view('layouts.cart',compact('items'));
    }

    public function checkout(){
        $user = User::find(Auth::user()->id);
        $items=[];
        $items_id=$_SESSION["items"];
        foreach ($items_id as $item) {
            array_push($items, Products::find($item));
        }
        return view('layouts.checkout',compact('user','items'));
    }
}

