<x-mylayouts.layout-default title=""
hideBanner="true">

<!-- Hero -->
<section class="contact-hero">
    <div class="container text-center">
        <h1>Contact Chef NV</h1>
        <p>
            We'd love to hear from you. Whether you're planning a celebration,
            catering an event or simply have a question, we're here to help.
        </p>
    </div>
</section>

<!-- Contact Section -->

<section class="contact-section py-5">

<div class="container">

<div class="row">

<!-- Contact Info -->

<div class="col-lg-5 mb-5">

<div class="contact-info">

<h2>Get In Touch</h2>

<p>
Feel free to contact us using any of the methods below.
</p>

<div class="info-item">
<i class="fas fa-phone"></i>
<div>
<h5>Phone</h5>
<p>+1 (868) 768-0451</p>
</div>
</div>

<div class="whatsapp-link">
<i class="fab fa-whatsapp text-success"></i>
<a href="https://wa.me/{{ config('app.whatsapp_number') }}?text=Hi%20Chef%20NV,%20I'd%20like%20to%20place%20an%20order."
   target="_blank"><h5>WhatsApp</h5></a>

        </a>
</div>

<div class="info-item">
<i class="fas fa-envelope"></i>
<div>
<h5>Email</h5>
<a href="mailto:{{ config('socials.email') }}" rel="noopener noreferrer"></span><span
                                            class="text">chefnvirayie@gmail.com</span></a>
</div>
</div>

<div class="info-item">
<i class="fas fa-location-dot"></i>
<div>
<h5>Location</h5>
<p>Trinidad & Tobago</p>
</div>
</div>

<div class="info-item">
<i class="fas fa-clock"></i>
<div>
<h5>Business Hours</h5>
<p>Mon – Sat<br>9:00 AM – 5:00 PM</p>
</div>
</div>



</div>

</div>

<!-- Contact Form -->

<div class="col-lg-7">

<div class="contact-form">

<h2>Send Us A Message</h2>

<form>

<div class="row">

<div class="col-md-6 mb-3">
<input type="text" class="form-control" placeholder="Full Name">
</div>

<div class="col-md-6 mb-3">
<input type="email" class="form-control" placeholder="Email Address">
</div>

</div>

<div class="mb-3">
<input type="text" class="form-control" placeholder="Subject">
</div>

<div class="mb-3">
<textarea class="form-control" rows="6" placeholder="Your Message"></textarea>
</div>

<button class="btn btn-send">
Send Message
</button>

</form>

</div>

</div>

</div>

</div>

</section>

<!-- Map -->

<section class="map-section">

<div class="container">

<div class="map-box">

<iframe
src="https://www.google.com/maps/embed?..."
allowfullscreen
loading="lazy">
</iframe>

</div>

</div>

</section>

<!-- Social -->

<section class="social-section">

<div class="container text-center">

<h2>Follow Chef NV</h2>

<p>Stay connected and see our latest creations.</p>

<div class="social-icons">

<a href="https://www.instagram.com/chefnvirayie?igsh=MWl1d3libDFsNjd3bQ%3D%3D"><i class="fab fa-instagram"></i></a>


</div>

</div>

<div>
    <a href="https://wa.me/18687680451?text=Hi%20Chef%20NV,%20I'd%20like%20to%20place%20an%20order."
   class="whatsapp-float"
   target="_blank">
    <i class="fab fa-whatsapp"></i>
</a>
</div>

</section>



</x-mylayouts.layout-default>
