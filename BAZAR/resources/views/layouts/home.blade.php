@extends('layouts.master')
@section ('title','bazar')
@section('css','index.css')
@section('content')
 <!-- Hero section -->
 <div id="hero-div">
    <div class="col-4" id="hero-text">
        <p>
            We have treasures in our houses, make benefit of your old furniture and sell them on BAZAR. Don't forget to check other people's treasures
        </p>
        <button id="hero-btn1">Buy</button>
        <button id="hero-btn2">Sell</button>
    </div>
    <img src="./Images/index/hero1.jpg" alt="Furniture Piece" class="col-3" id="hero-img1">
    <img src="./Images/index/hero2.jpg" alt="Furniture Piece" class="col-4">
</div>
</header>

<!-- Main Categories -->
<div id="cat-div">
<div class="col-3"><img src="./Images/index/CategoryImg1.png" alt="category" id="cat-img1"><span>Living Room</span></div>
<div class="col-3"><img src="./Images/index/CategoryImg2.png" alt="category"><span>Closet</span></div>
<div class="col-3"><img src="./Images/index/CategoryImg3.png" alt="category"><span>Electronics</span></div>
</div>


<!-- How to sell furniture on bazar -->
<div id="sell-steps">
<h1>How to sell furniture on BAZAR</h1>
<div>
    <div class="col-3"><p class="nums">1</p><img src="./Images/index/step1.png" alt="step1" id="steps-img">
    <br> <p class="steps-text">The first step is to sign up.</p></div>
    <div class="col-3"><p class="nums">2</p><img src="./Images/index/step2.png" alt="step1" id="steps-img">
    <br> <p class="steps-text">Then, upload the image and details of the piece you want to sell.</p></div>
    <div class="col-3"><p class="nums">3</p><img src="./Images/index/step3.png" alt="step1" id="steps-img">
    <br> <p class="steps-text">Wait until somebody fell in love and buy the piece</p></div>
</div>
</div>

<!-- Last added pieces -->
<div id="last-added">
<h1>Last added pieces</h1>
<div id="last-added-grid">
    <div>
        <img src="./Images/index/Item1.jpg" alt="Item"> 
        <p>Dark wooden closet with 4 sections</p>
        <p>JOD 25.00</p>
    </div>
    <div>
        <img src="./Images/index/Item2.png" alt="Item"> 
        <p>Small electrical oven, white color</p>
        <p>JOD 19.00</p>
    </div>
    <div>
        <img src="./Images/index/Item3.jpg" alt="Item"> 
        <p>Electrical oven, silver color</p>
        <p>JOD 40.00</p>
    </div>
    <div>
        <img src="./Images/index/Item1.jpg" alt="Item"> 
        <p>Dark wooden closet with 4 sections</p>
        <p>JOD 25.00</p>
    </div>
    <div>
        <img src="./Images/index/Item2.png" alt="Item"> 
        <p>Small electrical oven, white color</p>
        <p>JOD 19.00</p>
    </div>
    <div>
        <img src="./Images/index/Item3.jpg" alt="Item"> 
        <p>Electrical oven, silver color</p>
        <p>JOD 40.00</p>
    </div>
    <div>
        <img src="./Images/index/Item1.jpg" alt="Item"> 
        <p>Dark wooden closet with 4 sections</p>
        <p>JOD 25.00</p>
    </div>
    <div>
        <img src="./Images/index/Item2.png" alt="Item"> 
        <p>Small electrical oven, white color</p>
        <p>JOD 19.00</p>
    </div>
    <div>
        <img src="./Images/index/Item3.jpg" alt="Item"> 
        <p>Electrical oven, silver color</p>
        <p>JOD 40.00</p>
    </div>
</div>
</div>

<!-- Shipping Section -->
<div id="shipping">
<h1>Choose your favorite way of shipping</h1>
<div class="container">
    <img src="./Images/index/Shipping1.png" alt="Shipping Way">
    <img src="./Images/index/Shipping2.png" alt="Shipping Way">
    <img src="./Images/index/Shipping3.png" alt="Shipping Way">
    <img src="./Images/index/Shipping4.png" alt="Shipping Way">
</div>
</div>

<!-- Discount Section -->
<div id="discount">
<div class="container">
    <img src="./Images/index/Discount img.jpg" alt="">
    <div>
        <p>Get 25% off on your first order from BAZAR
        Sign Up now</p> 
        <button>Sign Up</button>
    </div>
</div>
</div>

@endsection
