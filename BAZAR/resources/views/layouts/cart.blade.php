@php
 $total=0;   
@endphp
@extends('layouts.master')
@section ('title','bazar Cart')
@section('css','cart.css')
@section('content')
<div class="container">
    <h1>Cart</h1>
    <h3>Order</h3>
    <hr/>
    <div class="d-flex justify-content-between mx-5">
        <h5 class="col-2">Item</h5>
        <span class="col-5"></span>
        <h5 class="col-3">Price</h5>
        <span class="col-1"></span>
    </div>
    <hr/>
@foreach ($items as $item)
<div class="d-flex justify-content-between align-items-center m-5">
    <img src="Images/index/Item3.jpg" alt="bazar piece" class="col-2"/>
    <h5 class="col-5">{{$item->name}}</h5>
    <h5 class="col-3">JOD {{$item->price}}</h5>
    <span class="col-1"><i class="fa-regular fa-circle-xmark"></i></span>
</div>
@php
    $total+= $item->price;
@endphp
@endforeach

    <hr/>
    <div class="d-flex justify-content-between mx-5">
        <h5 class="col-2">Subtotal</h5>
        <span class="col-5"></span>
        <h5 class="col-3">JOD {{$total}}</h5>
        <span class="col-1"></span>
    </div>

    <div class="d-flex justify-content-between mx-5">
        <h5 class="col-2">Shipping</h5>
        <span class="col-5"></span>
        <h5 class="col-3">JOD 03.00</h5>
        <span class="col-1"></span>
    </div>

    <div class="d-flex justify-content-between mx-5">
        <h5 class="col-2">Sale</h5>
        <span class="col-5"></span>
        <h5 class="col-3">JOD 00.00</h5>
        <span class="col-1"></span>
    </div>

    <div class="d-flex justify-content-between mx-5">
        <h5 class="font-weight-bold col-2">Total</h5>
        <span class="col-5"></span>
        <h5 class="font-weight-bold col-3">JOD {{$total}}</h5>
        <span class="col-1"></span>
    </div>

    <div class="d-flex justify-content-end my-5">
        <button class="">Proceed to checkout</button>
    </div>
</div>
@endsection