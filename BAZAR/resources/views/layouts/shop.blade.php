@extends('layouts.master')
@section ('title','bazar shop')
@section('css','shop.css')
@section('content')
<div id="shop">
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
    @if (session('msg'))
    <div class="alert alert-success" role="alert">
        {{session('msg')}}
    </div>
    @endif
    <div id="shop-grid">
        @foreach ($items as $item)
        <div>
            <a href="{{'product/'.$item->id}}"><img src="../Images/products/{{$item->img1}}" alt="Item"> 
            <p>{{$item->title}}</p>
            <p>JOD {{$item->price}}</p></a>
        </div>
        @endforeach
        
       
        
    </div>
</div>
@endsection