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
        <span>More <i class="fa-solid fa-caret-down"></i></span>
    </div>
    <div class="container">
        <div id="product-breadCrumb">
            <h5> Shop / {{$cat->name}} / {{$item->title}} </h5>
        </div>
        <div id="product-flex1">
            <div id="produc-image-slider" class="col-5">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img class="d-block w-100" src="/Images/products/{{$item->img1}}" alt="First slide">
                      </div>
                      <div class="carousel-item">
                        {{-- <img class="d-block w-100" src="./Images/index/Item1.jpg" alt="Second slide"> --}}
                      </div>
                      <div class="carousel-item">
                        {{-- <img class="d-block w-100" src="./Images/index/Item1.jpg" alt="Third slide"> --}}
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
            <div id="product-addToCart" class="col-6">
                <h2><b>{{$item->title}}</b></h2>
                <h3><b>JOD {{$item->price}}</b></h3>
                <h3>By:</h3>
                <div id="product-user">
                  <div>
                    <img src="./Images/Product/user.png" alt="User Image">
                  </div>
                  <div>
                    <h4><b>Aya Al Sawa</b></h4>
                    <h6>Amman, Jordan</h6>
                    <h6>
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                      (279)
                    </h6>
                  </div>
                </div>
                <div id="options">
                  <h4>23 Likes</h4>
                  <i class="fa-solid fa-heart"></i>
                  <i class="fa-solid fa-bookmark"></i>
                  <i class="fa-solid fa-link"></i>
                </div>
                <button><a href="/addToCart/{{$item->id}}">Add  to Cart </button>
                </div>
            </div>

            <div id="product-flex2">
              <div id="des&size" class="col-6">
                <h4><b>Description:</b></h4>
                <h4>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</h4>
                <br/>
                <h4><b>Size:</b></h4>
                <h4>Height: 1.20 m × Width: 0.90 m × Depth: 0.50 m</h4>
              </div>
              <div id="status&color" class="col-6">
                <h4><b>Status:</b></h4>
                <h4>Very Good</h4>
                <br/>
                <h4><b>Color:</b></h4>
                <h4>Dark Wooden</h4>
                <br/>
                <hr/>
                <h4>#Closet #Wooden #Dark</h4>
              </div>
            </div>
            <br/>
            <div id="similar-pro">
              <h2>Similar Products:</h2>
              <div id="similar-pro-grid">
                <div>
                    <img src="../Images/index/Item1.jpg" alt="Item"> 
                    <p>Dark wooden closet with 4 sections</p>
                    <p>JOD 25.00</p>
                </div>
                <div>
                    <img src="../Images/index/Item2.png" alt="Item"> 
                    <p>Small electrical oven, white color</p>
                    <p>JOD 19.00</p>
                </div>
                <div>
                    <img src="../Images/index/Item3.jpg" alt="Item"> 
                    <p>Electrical oven, silver color</p>
                    <p>JOD 40.00</p>
                </div>
                <div>
                    <img src="../Images/index/Item1.jpg" alt="Item"> 
                    <p>Dark wooden closet with 4 sections</p>
                    <p>JOD 25.00</p>
                </div>
              </div>
            </div>
        </div>
    </div>
@endsection