<link href="{{ asset('assets/css/contact.css') }}" rel="stylesheet">
<script
src="https://kit.fontawesome.com/64d58efce2.js"
crossorigin="anonymous"></script>
@extends('front.layouts.master')
@section('content')
<style>
    body{
        background-image: url('/assets/img/contact.svg');
        background-position: right;
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: 45%;
    }
</style>
<div id="container">
    <span class="big-circle"></span>
    <div class="form">
      <div class="contact-info">
        <h3 class="title">Let's get in touch</h3>
        <p class="text">
         For any queries related to NyoTsong, do mail uson the below address
        </p>

        <div class="info">
          <div class="information">
            <img src="assets/img/location.png" class="icon" alt="" />
            <p>College of Science and Technology, Rihchending</p>
          </div>
          <div class="information">
            <img src="assets/img/email.png" class="icon" alt="" />
            <p>developers@nyotsong.com</p>
          </div>
          <div class="information">
            <img src="assets/img/phone.png" class="icon" alt="" />
            <p>00975-77773228</p>
          </div>
        </div>

        <div class="social-media">
          <p>Connect with us :</p>
          <div class="social-icons">
            <a href="#">
              <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#">
              <i class="fab fa-instagram"></i>
            </a>
          </div>
        </div>
      </div>

      <div class="contact-form">
        <span class="circle one"></span>
        <span class="circle two"></span>

        <form action="index.html" autocomplete="off">
          <h3 class="title">Contact us</h3>
          <div class="input-container">
            <input type="text" name="name" class="input" placeholder="username"/>
            <span>Username</span>
          </div>
          <div class="input-container">
            <input type="email" name="email" class="input" placeholder="email"/>
            <span>Email</span>
          </div>
          <div class="input-container">
            <input type="tel" name="phone" class="input" placeholder="Phone"/>
            <span>Phone</span>
          </div>
          <div class="input-container textarea">
            <textarea name="message" class="input" placeholder="Message"></textarea>
            <span>Message</span>
          </div>
          <input type="submit" value="Send Mail" class="btn btn-outline-warning" href="#" />
        </form>
      </div>
    </div>
  </div>

  <script src="app.js"></script>
@endsection
