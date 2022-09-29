@extends('layouts.master')
@section ('title','Upload a piece to bazar')
@section('css','uploadPiece.css')
@section('content')
<div class="upload-piece container">
    <h1>Upload a piece to sell</h1>
    <h3>Piece Information</h3>
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
    <h5 class="mb-4">Fill some information about the piece you want to sell:</h5>
    <form action="/sellStep1" method="post" class="mx-4">
        @csrf
        <div class="mb-3">
            <label class="col-2" for="pieceTitle">Piece title*:</label>
            <input type="text" class="col-4" id="pieceTitle" name="title">
        </div>
        <div class="mb-3">
            <label class="col-2" for="pieceDes">Description*:</label>
            <input type="textarea" class="col-4" id="pieceDes" name="description">
        </div>
        <div class="mb-3">
            <label class="col-2" for="pieceColor">Color*:</label>
            <input type="text" class="col-4" id="pieceColor" name="color">
        </div>
        <div class="mb-3">
            <label class="col-2" for="pieceCat">Category*:</label>
            <select class="col-2" id="pieceCat" name="category">
                <option selected disabled>Select</option>
                <option value="livingRoom">Living Room</option>
                <option value="bedRoom">Bed Room</option>
                <option value="closet">Closet</option>
                <option value="carpet">Carpet</option>
                <option value="antique">Antique</option>
            </select>
        </div>
        <div class="mb-3">
            <label class="col-2" for="pieceCon">Condition*:</label>
            <select class="col-2" id="pieceCon" name="condition">
                <option selected disabled>Select</option>
                <option value="excellent">Excellent</option>
                <option value="good">Good</option>
                <option value="fair">Fair</option>
                <option value="poor">Poor</option>
            </select>
        </div>
        <div class="mb-3">
            <label class="col-2" for="pieceSize">Size:</label>
            <label for="pieceH">Height* (m)</label>
            <input type="text" class="col-1 mr-3" id="pieceH" name="height">
            <label for="pieceW">Width* (m)</label>
            <input type="text" class="col-1 mr-3" id="pieceW" name="width">
            <label for="pieceD">Depth (m)</label>
            <input type="text" class="col-1 mr-3" id="pieceD" name="depth">
        </div>
        <div class="mb-3">
            <label class="col-2" for="piecePrice">Price* (JOD):</label>
            <input type="text" class="col-1" id="piecePrice" name="price">
        </div>
        <div class="mb-3">
            <label class="col-2" for="onSale">On sale:</label>
            <input type="checkbox" id="onSale" name="onSale">
            <label for="saleBefore">Price before (JOD):</label>
            <input type="text" class="col-1" id="saleBefore" name="priceBefore">
            <label for="saleAfter">Price after (JOD):</label>
            <input type="text" class="col-1" id="saleAfter" name="priceAfter">
        </div>
        <h5 class="my-4">Upload images of the piece* (at least one image and 3 images maximum):</h5>
        <div class="image-upload mb-3 mx-3">
            <label for="file-input">
              <img src="Images/Sell/uploadImg.png" class="u-img"/>
            </label>
            <input id="file-input" type="file" accept="image/*" name="img1"/>

            <label for="file-input">
                <img src="Images/Sell/uploadImg.png" class="u-img"/>
            </label>
            <input id="file-input" type="file" accept="image/*" name="img2"/>

            <label for="file-input">
                <img src="Images/Sell/uploadImg.png" class="u-img"/>
            </label>
            <input id="file-input" type="file" accept="image/*" name="img3"/>
        </div>
        <div class="d-flex justify-content-end my-5">
            <button type="submit" class="col-2">Next</button>
        </div>
    </form>
</div>
@endsection