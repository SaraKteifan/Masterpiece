@extends('layouts.master')
@section ('title','Contact bazar')
@section('css','contact.css')
@section('content')
<div id="contactUs" class="container">
    <h1>Contact Us</h1>
    <h2>Let's have a seat and chat!</h2>
    <div id="first-contact-flex">
        <img src="./Images/Contact/ContactImg.jpeg" alt="Contact bazar" class="col-6">
        <div id="contact-form" class="col-6">
            <form>
                <div class="form-group">
                  <label for="exampleFormControlInput1">Your name:</label>
                  <input type="text" class="form-control" id="exampleFormControlInput1">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput2">Email:</label>
                    <input type="email" class="form-control" id="exampleFormControlInput2" placeholder="name@example.com">
                  </div>
                <div class="form-group">
                  <label for="exampleFormControlTextarea1">Message:</label>
                  <textarea class="form-control" id="exampleFormControlTextarea1" rows="10"></textarea>
                </div>
                <button id="send-btn">Send</button>
              </form>
        </div>
    </div>
    <br/>
    <div id="second-contact-flex">
        <div id="contact-info" class="col-5 ">
            <div>
                <h4>bazar phone numbers for any query:</h4>
                <h4 class="ml-4"><i class="fa-solid fa-phone"></i> 0778090516</h4>
                <h4 class="ml-4"><i class="fa-solid fa-phone"></i> 0798505178</h4>
            </div>
            <br/>
            <div>
                <h4>Or you can visit our office located at:</h4>
                <h4 class="ml-4"><i class="fa-solid fa-location-dot"></i> JamAl-Al-Juqah St. 38, Abdali Boulivard, Amman</h4>
            </div>
        </div>
        <div class="col-6">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1692.4105621969154!2d35.903507217443845!3d31.965749100000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x151ca071796ca61d%3A0x8e3efea298188239!2sAbdali%20Boulevard!5e0!3m2!1sen!2sjo!4v1661697216073!5m2!1sen!2sjo" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</div>
@endsection