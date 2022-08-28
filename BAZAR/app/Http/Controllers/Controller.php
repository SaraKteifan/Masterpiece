<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function index()
    {
        return view('layouts.home');
    }
    public function shop()
    {
        return view('layouts.shop');
    }
    public function product()
    {
        return view('layouts.product');
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
}

