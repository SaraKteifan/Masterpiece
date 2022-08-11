@extends('layouts.master')
@section ('title','bazar products')
@section('css','product.css')
@section('content')
<div id="product">
    <div id="shop-cat">
        <span>All</span>
        <span>Living room</span>
        <span>Bed room</span>
        <span>Closets</span>
        <span>Carpets</span>
        <span>Refrigerator</span>
        <span>Ovens</span>
        <span></span>
        <span>Antique</span>
        <span>More</span>
    </div>
    <div class="container">
        <div id="product-breadCrumb">
            <h5> Shop / Closets / Dark wodden closet </h5>
        </div>
        <div id="product-flex1">
            <div id="produc-image-slider" class="col-6">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img class="d-block w-100" src="./Images/index/Item1.jpg" alt="First slide">
                      </div>
                      <div class="carousel-item">
                        <img class="d-block w-100" src="./Images/index/Item1.jpg" alt="Second slide">
                      </div>
                      <div class="carousel-item">
                        <img class="d-block w-100" src="./Images/index/Item1.jpg" alt="Third slide">
                      </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
                  </div>
            </div>
            <div id="product-addToCart">
                
            </div>
        </div>
    </div>
@endsection