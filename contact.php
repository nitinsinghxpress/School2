<?php
$pageTitle = 'Contact Us';
$currentPage = 'contact';
$base = "https://www.modernpublicschoolandcollege.com/";
include 'includes/header.php';
?>

<!-- PAGE BANNER -->
<div class="page-banner">
  <div class="container" style="position:relative;z-index:1">
    <h1 class="page-banner-title text-white">Contact <span style="color:var(--gold-light);">Us</span></h1>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb mb-0">
        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
        <li class="breadcrumb-item active">Contact Us</li>
      </ol>
    </nav>
    <p class="mt-3" style="color:rgba(255,255,255,0.65);">Straightforward and professional — we're here to help.</p>
  </div>
</div>

<!-- CONTACT INFO CARDS -->
<section class="contact-section">
  <div class="container">
    <div class="row g-4 mb-5">
      <div class="col-md-3 col-sm-6 fade-up">
        <div class="contact-info-card text-center">
          <div class="contact-info-icon mx-auto"><i class="bi bi-geo-alt-fill"></i></div>
          <h6 style="color:var(--gold-light);font-family:'Playfair Display',serif;margin-bottom:8px;">Address</h6>
          <p style="color:rgba(255,255,255,.65);font-size:.85rem;line-height:1.7;">
            Lucknow Road, Gabhariya-Sultanpur (U.P.) 228001
          </p>
        </div>
      </div>
      <div class="col-md-3 col-sm-6 fade-up fade-up-delay-1">
        <div class="contact-info-card text-center">
          <div class="contact-info-icon mx-auto"><i class="bi bi-telephone-fill"></i></div>
          <h6 style="color:var(--gold-light);font-family:'Playfair Display',serif;margin-bottom:8px;">Phone</h6>
          <p style="color:rgba(255,255,255,.65);font-size:.85rem;line-height:1.9;">
            <a href="tel:+919451561564" style="color:inherit;text-decoration:none;">+91 9451561564</a><br>
            <a href="tel:+916387004287" style="color:inherit;text-decoration:none;">+91 6387004287</a>
          </p>
        </div>
      </div>
      <div class="col-md-3 col-sm-6 fade-up fade-up-delay-2">
        <div class="contact-info-card text-center">
          <div class="contact-info-icon mx-auto"><i class="bi bi-envelope-fill"></i></div>
          <h6 style="color:var(--gold-light);font-family:'Playfair Display',serif;margin-bottom:8px;">Email</h6>
          <p style="color:rgba(255,255,255,.65);font-size:.85rem;line-height:1.7;">
            <a href="mailto:modernpublicschool.sln@gmail.com" style="color:inherit;text-decoration:none;">
              modernpublicschool.sln@gmail.com
            </a>
          </p>
        </div>
      </div>
      <div class="col-md-3 col-sm-6 fade-up fade-up-delay-3">
        <div class="contact-info-card text-center">
          <div class="contact-info-icon mx-auto"><i class="bi bi-clock-fill"></i></div>
          <h6 style="color:var(--gold-light);font-family:'Playfair Display',serif;margin-bottom:8px;">Office Hours</h6>
          <p style="color:rgba(255,255,255,.65);font-size:.85rem;line-height:1.9;">
            Mon – Sat: 8:00 AM – 4:00 PM<br>Sunday: Closed
          </p>
        </div>
      </div>
    </div>

    <div class="row g-5 align-items-start">
      <!-- Form -->
      <div class="col-lg-6 fade-up">
        <div class="form-3d">
          <h3 style="font-family:'Playfair Display',serif;color:var(--gold-light);margin-bottom:8px;">
            Send Us a Message
          </h3>
          <p style="color:rgba(255,255,255,.55);font-size:.88rem;margin-bottom:28px;">
            We value open communication. Our team responds within 24 hours.
          </p>

          <form id="contactForm" novalidate>
            <div class="row g-3">
              <div class="col-sm-6">
                <label class="form-label-3d">Full Name *</label>
                <input type="text" name="name" class="form-control form-control-3d" placeholder="Your name" required>
              </div>
              <div class="col-sm-6">
                <label class="form-label-3d">Phone Number *</label>
                <input type="tel" name="phone" class="form-control form-control-3d" placeholder="+91 XXXXX XXXXX" required>
              </div>
              <div class="col-12">
                <label class="form-label-3d">Email Address</label>
                <input type="email" name="email" class="form-control form-control-3d" placeholder="your@email.com">
              </div>
              <div class="col-12">
                <label class="form-label-3d">Subject *</label>
                <select name="subject" class="form-control form-control-3d" required>
                  <option value="" disabled selected>Select subject</option>
                  <option>Admission Inquiry</option>
                  <option>Fee Structure</option>
                  <option>Infrastructure / Facilities</option>
                  <option>Academic Programs</option>
                  <option>General Inquiry</option>
                  <option>Other</option>
                </select>
              </div>
              <div class="col-12">
                <label class="form-label-3d">Your Message *</label>
                <textarea name="message" class="form-control form-control-3d" rows="5"
                  placeholder="Write your message here…" required></textarea>
              </div>
              <div class="col-12">
                <button type="submit" class="btn-gold w-100" style="padding:15px;font-size:.95rem;">
                  <i class="bi bi-send-fill me-2"></i>Send Message
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>

      <!-- Map -->
      <div class="col-lg-6 fade-up fade-up-delay-1">
        <h3 style="font-family:'Playfair Display',serif;color:var(--gold-light);margin-bottom:20px;">
          Find Us on Map
        </h3>
        <div class="map-container">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3579.9!2d82.0!3d26.25!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjbCsDE1JzAwLjAiTiA4MsKwMDAnMDAuMCJF!5e0!3m2!1sen!2sin!4v1"
            width="100%" height="380" style="border:0;display:block;" allowfullscreen loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="mt-4 d-flex flex-column gap-3">
          <a href="https://wa.me/6387004287?text=Hello%2C%20I%20would%20like%20to%20know%20more%20about%20your%20services."
            target="_blank" class="btn-gold text-center">
            <i class="bi bi-whatsapp me-2"></i>Chat on WhatsApp
          </a>
          <a href="online_registration.php" class="btn-outline-gold text-center">
            <i class="bi bi-pencil-square me-2"></i>Register Online
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
