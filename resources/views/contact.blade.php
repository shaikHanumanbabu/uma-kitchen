@extends('layouts.app')

@section('content')

<div class="contact-head-img text-center">
  <div class="contact-head-img-black">
    <div class="container">
      <h2>Your Way, Right Away</h2>
      <p>Uma's Kitchen! The Place To Be For Authentic Food!</p>
      <span><a href="{{ route('home') }}">HOME</a>&nbsp; >&nbsp; <b class="content-subhead">CONTACT US</b></span> 
    </div>
  </div>
</div>
  
<!--TOP-->
<div class="container padd-50">
  <div class="col-md-8 contact-page-head-border">
    <div class="contact-page-head">
      <h2 class="story-top-head" style="color: #014422;">Why Uma's Authentic Kitchen is Unique:</h2> 
      <p class="story-top-head-p">
        * Every meal would be made with Love and with traditional principles of cooking. <br> 
        * Every meal you eat supports a kid's Education & Food. <br>
        * All the contributions will be used 100% to support education & Medical help for the needy (Bhavita.org).
      </p>

      <h2 style="color: #014422;">How can we help you</h2>
      <p>Please give as much detail as possible so we can route your question properly.</p>
    </div>
    <div class="row">
      <div class="col-md-11" style="padding:0;">
        <div class="col-sm-6 col-md-6 black"> <span class="input input--nariko">
          <input class="input__field input__field--nariko" type="text" id="input-20" style="background-color:transparent;" />
          <label class="input__label input__label--nariko" for="input-20"> <span class="input__label-content input__label-content--nariko">First name</span> </label>
          </span> </div>
        <!--Last name-->
        <div class="col-sm-6 col-md-6 black"> <span class="input input--nariko">
          <input class="input__field input__field--nariko" type="text" id="input-20" style="background-color:transparent;" />
          <label class="input__label input__label--nariko" for="input-20"> <span class="input__label-content input__label-content--nariko">Last name</span> </label>
          </span> </div>
        <div class="clearfix"></div>
        <!--Phone Number-->
        <div class="col-sm-6 col-md-6 black"> <span class="input input--nariko">
          <input class="input__field input__field--nariko" type="text" id="input-20" style="background-color:transparent;" />
          <label class="input__label input__label--nariko" for="input-20"> <span class="input__label-content input__label-content--nariko">Phone Number</span> </label>
          </span> </div>
        <!--Email Address-->
        <div class="col-sm-6 col-md-6 black"> <span class="input input--nariko">
          <input class="input__field input__field--nariko" type="text" id="input-20" style="background-color:transparent;" />
          <label class="input__label input__label--nariko" for="input-20"> <span class="input__label-content input__label-content--nariko">Email Address</span> </label>
          </span> </div>
        <div class="clearfix"></div>
        <!--Message-->
        <div class="col-md-12 message"> <span class="input input--nariko black">
          <textarea class="input__field input__field--nariko textarea" type="text" id="input-20" style="background-color:transparent;"></textarea>
          <label class="input__label input__label--nariko" for="input-20"> <span class="input__label-content input__label-content--nariko" style="color:#191919;">Message</span> </label>
          </span> </div>
        <div class="clearfix"></div>
        <div class="col-md-12 text-right"> <a href="#" class="menu-all-btn-wht btn-bg">SUBMIT</a> </div>
        <div class="clearfix"></div>
      </div>
      <div class="col-md-1"></div>
    </div>
  </div>
  <div class="col-md-4">
    <div class="row margin-top">
      <div class="col-md-offset-2 col-md-10">
        <div class="contact-page-head">
          <h2 style="color: #014422;">Contact Information</h2>
          <div class="contact-head-u btn-bg"></div>
        </div>
        <div class="contact-det">
          <div class="contact-icon"><i class="flaticon-placeholder"></i></div>
          <span style="color: #014422;">ADDRESS <br />
            <p>Uma's Authentic Kitchen, <br>
            G-8, Sairam Enclave, <br>
            Ameenpur, Hyderabad.</p>
          </span> </div>
        <div class="contact-det">
          <div class="contact-icon"><i class="flaticon-phone-call"></i></div>
          <span style="color: #014422;">PHONE <br />
          <p style="margin-bottom:8px;"><b>+91 7386240132</b></p>
          </span> </div>
        <div class="contact-det">
          <div class="contact-icon"><i class="flaticon-envelope"></i></div>
          <span style="color: #014422;">EMAIL <br />
          <p>uma.raavi@gmail.com</p>
          </span> </div>
        <div class="contact-det">
          <div class="contact-icon"><i class="flaticon2-clock"></i></div>
          <span style="color: #014422;">OPENING HOURS <br />
          <p>Mon-Fri :- 6AM - 2PM</p>
          <p>Sat:- 8Am - 12PM</p>
          <p>Sunday :- <em class="content-subhead">Holiday</em></p>
          <p>Public Holidays :- <em class="content-subhead">Closed</em></p>  
        </span> </div>
      </div>
    </div>
  </div>
  <div class="clearfix"></div>
</div>

<!--MAP-->
<div class="container-fluid">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3804.5555147459563!2d78.3189512!3d17.528719!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcb8d0066603e51%3A0x8e1a03959206ce03!2sUma%E2%80%99s%20Authentic%20Kitchen!5e0!3m2!1sen!2sin!4v1709910240472!5m2!1sen!2sin" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
    
@endsection