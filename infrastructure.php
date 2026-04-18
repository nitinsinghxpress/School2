<?php
$pageTitle = 'Infrastructure';
$currentPage = 'infrastructure';
$base = "https://www.modernpublicschoolandcollege.com/";
include 'includes/header.php';

$facilities = [
  ['icon'=>'bi-building','title'=>'Spacious Classrooms','desc'=>'Well-ventilated, well-lit modern classrooms designed for optimum learning, equipped with smart boards and comfortable seating.'],
  ['icon'=>'bi-tree-fill','title'=>'Sports Ground','desc'=>'A large multipurpose sports ground supporting cricket, football, basketball, volleyball, and athletics for all students.'],
  ['icon'=>'bi-laptop-fill','title'=>'Computer Laboratory','desc'=>'State-of-the-art computer labs with latest hardware and high-speed internet for digital literacy and programming.'],
  ['icon'=>'bi-flask-fill','title'=>'Science Laboratories','desc'=>'Fully equipped Physics, Chemistry, and Biology labs that make learning experiential and engaging.'],
  ['icon'=>'bi-book-fill','title'=>'Library','desc'=>'A comprehensive library stocked with thousands of books, journals, encyclopaedias, and digital resources.'],
  ['icon'=>'bi-camera-video-fill','title'=>'CCTV Surveillance','desc'=>'24/7 CCTV monitoring across the campus ensuring a safe, secure environment for every student.'],
  ['icon'=>'bi-bus-front-fill','title'=>'Transport Facility','desc'=>'Safe and reliable transport service covering all major routes with GPS tracking and trained drivers.'],
  ['icon'=>'bi-cup-hot-fill','title'=>'Canteen / Cafeteria','desc'=>'A hygienic, nutritious canteen offering healthy meals and snacks in a clean dining environment.'],
];
?>

<div class="page-banner">
  <div class="container" style="position:relative;z-index:1">
    <h1 class="page-banner-title text-white">School <span style="color:var(--gold-light);">Campus</span></h1>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb mb-0">
        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
        <li class="breadcrumb-item">Infrastructure</li>
        <li class="breadcrumb-item active">School Campus</li>
      </ol>
    </nav>
    <p class="mt-3" style="color:rgba(255,255,255,.65);">Modern facilities that support holistic learning and development</p>
  </div>
</div>

<!-- HERO INFRA -->
<section class="about-section">
  <div class="container">
    <div class="row align-items-center g-5">
      <div class="col-lg-6 fade-up">
        <div class="about-img-frame">
          <img src="<?= $base ?>school_img/school.jpg" alt="School Campus">
        </div>
      </div>
      <div class="col-lg-6 fade-up fade-up-delay-1">
        <span class="section-tag">World-Class Infrastructure</span>
        <h2 class="section-title">A Campus Built for <span class="highlight">Excellence</span></h2>
        <div class="gold-divider"></div>
        <p class="section-text mb-3">
          Modern Public School &amp; College boasts a sprawling campus designed to provide students with
          every facility they need for a well-rounded education. Every corner of our infrastructure
          reflects our commitment to quality.
        </p>
        <p class="section-text mb-4">
          From spacious, well-lit classrooms to modern science laboratories, from a comprehensive library
          to wide sports grounds — our facilities create the ideal environment for curiosity, creativity,
          and excellence to thrive.
        </p>
        <a href="online_registration.php" class="btn-gold me-3">Apply Now</a>
        <a href="contact.php" class="btn-outline-gold">Schedule a Visit</a>
      </div>
    </div>
  </div>
</section>

<!-- FACILITIES GRID -->
<section class="vmh-section" style="background:var(--navy2);">
  <div class="container">
    <div class="text-center mb-5 fade-up">
      <span class="section-tag">Our Facilities</span>
      <h2 class="section-title">What We <span class="highlight">Offer</span></h2>
      <div class="gold-divider center"></div>
    </div>
    <div class="row g-4">
      <?php foreach ($facilities as $i => $f): ?>
      <div class="col-md-6 col-lg-3 fade-up <?= $i%2===1?'fade-up-delay-1':($i%3===1?'fade-up-delay-2':'') ?>">
        <div class="infra-card">
          <div style="background:linear-gradient(135deg,rgba(200,168,75,0.15),rgba(200,168,75,0.05));
            padding:28px;text-align:center;border-bottom:1px solid rgba(200,168,75,0.15);">
            <i class="bi <?= $f['icon'] ?>" style="font-size:2.8rem;color:var(--gold);"></i>
          </div>
          <div class="infra-card-body">
            <h5><?= $f['title'] ?></h5>
            <p><?= $f['desc'] ?></p>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- CTA -->
<section class="cta-section text-center">
  <div class="particles-bg"></div>
  <div class="container" style="position:relative;z-index:1">
    <div class="fade-up">
      <span class="section-tag">Experience It Yourself</span>
      <h2 class="section-title" style="max-width:700px;margin:0 auto 20px;">
        Visit Our <span class="highlight">Campus</span> Today
      </h2>
      <p class="section-text mb-4" style="max-width:580px;margin:0 auto 30px;">
        We invite you to visit our campus and see firsthand the world-class facilities we offer.
        Our team will be happy to take you on a guided tour.
      </p>
      <div class="d-flex flex-wrap gap-3 justify-content-center">
        <a href="contact.php" class="btn-gold"><i class="bi bi-map-fill me-2"></i>Plan Your Visit</a>
        <a href="online_registration.php" class="btn-outline-gold"><i class="bi bi-pencil-square me-2"></i>Register Now</a>
      </div>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
