@include('layouts.header')

<section class="conatact_us">

    <div class="container">
      <div class="cont_d">
        <h2>Contact Us</h2>
        <p> Insolvency Professionals & Restructuring Advisors Insolvency Professionals</p>
      </div>
    </div>

    </section>


    <!-- banner part end -->

   <div class="contact-area pt-100 pb-70">

<div class="container">
<div class="row align-items-center">
<div class="col-lg-8 col-md-7">
<div class="section-title">
<h2>Get <span class="text_col">In Touch</span></h2>
</div>
<form  class="reset" id="contactForm" action="{{route('send.contact.us')}}" method="post">
  @csrf
<div class="row">
<div class="col-lg-6">
<div class="form-group">
<input type="text" name="name" id="name" class="form-control" placeholder="Name">
</div>
</div>
<div class="col-lg-6">
<div class="form-group">
<input type="email" name="email" id="email" class="form-control" placeholder="Email" >
</div>
</div>
<div class="col-lg-6">
<div class="form-group">
<input type="text" name="phone" id="phone" placeholder="Phone"  class="form-control">
</div>
</div>
<div class="col-lg-6">
<div class="form-group">
<input type="text" name="subject" id="subject" class="form-control" placeholder="Subject" >
</div>
</div>
<div class="col-lg-12">
<div class="form-group">
<textarea name="message" class="form-control" id="message" cols="30" rows="8" placeholder="Write message" ></textarea>
</div>
</div>
<div class="col-lg-12 col-md-12">
<div class="form-group">
<div class="form-check agree-label">
<input name="gridCheck" value="I agree to the terms and privacy policy." class="form-check-input" type="checkbox" id="gridCheck" required="">
<label class="form-check-label" for="gridCheck">
Accept <a href="terms-conditions.html">Terms of Services</a> and <a href="privacy-policy.html">Privacy Policy</a>
</label>
</div>
</div>
</div>
<div class="col-lg-12">
<button type="submit" class="btn common-btn" style="pointer-events: all; cursor: pointer;">
Send Message
</button>
<div id="msgSubmit" class="h3 text-center hidden"></div>
<div class="clearfix"></div>
</div>
</div>
</form>
</div>
<div class="col-lg-4 col-md-5">
<div class="contact-info">
<h3>Contact <span class="text_col">Info</span></h3>
<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Deleniti, maxime at. Ipsa veniam eveniet</p>
<ul>
<li>
<i class="fa-solid fa-location-crosshairs"></i>
<a href="#">113 Inva, White House, New Jersey, USA</a>
</li>
<li>
<i class="fa-solid fa-phone"></i>
<a href="tel:+0015481592491">+001-548-159-2491</a>
<a href="tel:+5468792355698">+546-879-235-5698</a>
</li>
<li>
<i class="fa-solid fa-at"></i>
<a href="mailto:hello@inva.com">hello@inva.com</a>
<a href="mailto:info@inva.com">info@inva.com</a>
</li>
</ul>
</div>
</div>
</div>
</div>
</div>

<section class="tow_amp">
    <div class="container">

<div class="row">
    <div class="col-lg-6 col-md-6">
        <div class="map">
<div style="width: 100%"><iframe width="100%" height="600" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=1%20Grafton%20Street,%20Dublin,%20Ireland+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a href="https://www.maps.ie/distance-area-calculator.html">distance maps</a></iframe></div>            <div style="width: 100%"></div>
        </div>
    </div>

    <div class="col-lg-6 col-md-6">
        <div class="map">
<div style="width: 100%"><iframe width="100%" height="600" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=1%20Grafton%20Street,%20Dublin,%20Ireland+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a href="https://www.maps.ie/distance-area-calculator.html">distance maps</a></iframe></div>            <div style="width: 100%"></div>
        </div>
    </div>

</div>

    </div>

</section>
<!--======End Contact Us Form Section======-->

@include('layouts.footer')
