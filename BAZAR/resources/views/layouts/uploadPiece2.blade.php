@extends('layouts.master')
@section ('title','Upload a piece to bazar')
@section('css','uploadPiece.css')
@section('content')
<div class="upload-piece container">
    <h1>Upload a piece to sell</h1>
    <h3>User Information</h3>
    <hr/>
    @if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form action="/sellStep2" method="get" class="my-5" id="user-info-form">
    @csrf
        <div class="my-3">
            <label for="" class="col-2">Country*:</label>
            <input type="text" class="col-3" name="country" id="country">
        </div>

        <div class="my-3">
            <label for="city" class="col-2">City*:</label>
            <input type="text" class="col-3" name="city" id="city">
        </div>

        <div class="my-3">
            <label for="address" class="col-2">Address*:</label>
            <input type="text" class="col-3" name="address" id="address">
        </div>

        <div class="my-3">
            <label for="phone-no" class="col-2">Phone no*:</label>
            <input type="text" class="col-3" name="phone-no" id="phone-no">
        </div>

        <div class="my-3">
            <input type="checkbox">
            <label for="agreement">I have read and agree to the <a href="">Terms of Use</a></label>
        </div>

        <div class="">
            <button type="submit" class="">Upload Piece</button>
        </div>
    </form>
</div>
@endsection