@extends('layouts.master')
@section ('title','bazar Checkout')
@section('css','checkout.css')
@section('content')
<div class="container">
    <h1>Checkout</h1>

    <h2 class="my-5">Order Summary</h2>
    <div class="d-flex mx-5 my-3 justify-content-between">
        <h5>Electrical oven, silver color</h5>
        <h5>JOD 40.00</h5>
    </div>
    <div class="d-flex mx-5 my-3 justify-content-between">
        <h5>Small electrical oven, white color</h5>
        <h5>JOD 19.00</h5>
    </div>
    <div class="d-flex mx-5 my-3 justify-content-between">
        <h5>Dark wooden closet with 4 sections</h5>
        <h5>JOD 25.00</h5>
    </div>
    <hr/>

    <div class="d-flex mx-5 my-3 justify-content-between">
        <h4>Subtotal</h4>
        <h4>JOD 84.00</h4>
    </div>
    <div class="d-flex mx-5 my-3 justify-content-between">
        <h4>Shipping</h4>
        <h4>JOD 03.00</h4>
    </div>
    <div class="d-flex mx-5 my-3 justify-content-between">
        <h4>Sale</h4>
        <h4>JOD 00.00</h4>
    </div>
    <hr/>

    <div class="d-flex mx-5 my-3 justify-content-between">
        <h4 class="font-weight-bold">Total</h4>
        <h4 class="font-weight-bold">JOD 87.00</h4>
    </div>

    <h2 class="my-5">Customer Information</h2>
    <form action="" method="" class="my-5" id="user-info-form">
        @csrf
        <div class="d-flex">
            <div class="col-6">
                <div class="my-3">
                    <label for="" class="col-3">Email*:</label>
                    <input type="" class="col-6">
                </div>

                <div class="my-3">
                    <label for="" class="col-3">Name*:</label>
                    <input type="" class="col-6">
                </div>

                <div class="my-3">
                    <label for="" class="col-3">Phone no*:</label>
                    <input type="" class="col-6">
                </div>
                <div class="my-3">
                    <label for="" class="col-6">Delivery Company*:</label><br/>

                    <input type="radio" name="shipping" value="aramex" id="aramex" class="r-input">
                    <label for="aramex"><img src="Images/index/Shipping1.png" alt="aramex" class="w-25"></label>

                    <input type="radio" name="shipping" value="one-delivery" id="one-delivery" class="r-input">
                    <label for="one-delivery"><img src="Images/index/Shipping2.png" alt="one-delivery" class="w-25"></label>
                    
                    <input type="radio" name="shipping" value="kareem" id="kareem" class="r-input">
                    <label for="kareem"><img src="Images/index/Shipping3.png" alt="kareem" class="w-25"></label>

                    <input type="radio" name="shipping" value="easy" id="easy" class="r-input">
                    <label for="easy"><img src="Images/index/Shipping4.png" alt="easy" class="w-25"></label>
                </div>
            </div>
            <div class="col-6">
                <div class="my-3">
                    <label for="" class="col-3">Country*:</label>
                    <input type="" class="col-6">
                </div>
        
                <div class="my-3">
                    <label for="" class="col-3">City*:</label>
                    <input type="" class="col-6">
                </div>
        
                <div class="my-3">
                    <label for="" class="col-3">Address*:</label>
                    <input type="" class="col-6"> <br/>
                </div>
                <div class="my-3">
                    <label for="" class="col-6">Payment Method*:</label><br/>
                    <div class="mx-5">
                        <input type="radio" name="payment" value="cash" id="cash">
                        <label for="cash" class="mr-5">Cash on delivery</label>
                    
                    
                        <input type="radio" name="payment" value="visa" id="visa">
                        <label for="visa">Visa Card</label>
                    </div>
                </div>
            </div>
        </div>
        <div class="">
            <button class="">Upload Piece</button>
        </div>
    </form>
</div>
@endsection