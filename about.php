<?php
$pageTitle = 'About Us';
$currentPage = 'about';
$base = "https://www.modernpublicschoolandcollege.com/";
include 'includes/header.php';
?>

<!-- PAGE BANNER -->
<div class="page-banner">
  <div class="container" style="position:relative;z-index:1">
    <h1 class="page-banner-title text-white">About <span style="color:var(--gold-light);">Us</span></h1>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb mb-0">
        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
        <li class="breadcrumb-item active">About Us</li>
      </ol>
    </nav>
    <p class="mt-3" style="color:rgba(255,255,255,0.65);max-width:500px;">From academics to arts and sports, we nurture every talent.</p>
  </div>
</div>

<!-- ABOUT INTRO -->
<section class="about-section">
  <div class="container">
    <div class="row align-items-center g-5">
      <div class="col-lg-5 fade-up">
        <div class="about-img-frame">
          <img src="<?= $base ?>school_img/carausel_0.jpg" alt="School Campus">
        </div>
      </div>
      <div class="col-lg-7 fade-up fade-up-delay-1">
        <span class="section-tag">About Our Institution</span>
        <h2 class="section-title">Welcome to <span class="highlight">Modern Public</span> School &amp; College</h2>
        <div class="gold-divider"></div>
        <p class="section-text mb-3">
          A nurturing environment fostering academic excellence, creativity, and character development.
          Our dedicated educators inspire lifelong learning and holistic growth, empowering students
          to achieve their potential and contribute meaningfully to society.
        </p>
        <p class="section-text mb-4">
          A balanced focus on academics, sports, arts, and extracurricular activities ensures every
          child grows into a well-rounded individual. We believe education is not confined to textbooks;
          it extends to nurturing creativity, critical thinking, teamwork, and leadership skills.
          Through cultural events, sports tournaments, art exhibitions, and student-led initiatives,
          we encourage our students to explore their interests and uncover hidden talents.
        </p>
        <div class="row g-3 mb-4">
          <div class="col-sm-6">
            <div style="background:rgba(200,168,75,0.08);border:1px solid rgba(200,168,75,0.2);
              border-radius:10px;padding:16px 20px;display:flex;align-items:center;gap:12px;">
              <i class="bi bi-buildings-fill" style="color:var(--gold);font-size:1.6rem;"></i>
              <div>
                <div style="color:#fff;font-weight:600;font-size:.9rem;">ICSE &amp; ISC Board</div>
                <div style="color:rgba(255,255,255,.5);font-size:.78rem;">Affiliated New Delhi</div>
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div style="background:rgba(200,168,75,0.08);border:1px solid rgba(200,168,75,0.2);
              border-radius:10px;padding:16px 20px;display:flex;align-items:center;gap:12px;">
              <i class="bi bi-award-fill" style="color:var(--gold);font-size:1.6rem;"></i>
              <div>
                <div style="color:#fff;font-weight:600;font-size:.9rem;">33+ Years of Trust</div>
                <div style="color:rgba(255,255,255,.5);font-size:.78rem;">Established Legacy</div>
              </div>
            </div>
          </div>
        </div>
        <a href="online_registration.php" class="btn-gold me-3">Apply Now</a>
        <a href="contact.php" class="btn-outline-gold">Contact Us</a>
      </div>
    </div>
  </div>
</section>

<!-- VISION MISSION HISTORY -->
<section class="vmh-section">
  <div class="container">
    <div class="text-center mb-5 fade-up">
      <span class="section-tag">Our Core Values</span>
      <h2 class="section-title">Mission, Vision &amp; <span class="highlight">History</span></h2>
      <div class="gold-divider center"></div>
    </div>
    <div class="row g-4">
      <div class="col-lg-4 fade-up">
        <div class="vmh-card">
          <div class="vmh-card-icon"><i class="bi bi-bullseye"></i></div>
          <h4>Our Mission</h4>
          <p>Our mission is to provide holistic education that nurtures every aspect of a student's
          development—academic, emotional, physical, and ethical. We are dedicated to creating a
          stimulating learning environment that encourages curiosity, innovation, and a thirst for
          knowledge. By embracing diversity and promoting inclusivity, we aim to cultivate global
          citizens who are empathetic, responsible, and driven to make meaningful contributions to society.</p>
        </div>
      </div>
      <div class="col-lg-4 fade-up fade-up-delay-1">
        <div class="vmh-card">
          <div class="vmh-card-icon"><i class="bi bi-eye-fill"></i></div>
          <h4>Our Vision</h4>
          <p>Our vision is to inspire and empower individuals to achieve excellence in their personal and
          professional lives. We strive to foster an environment that encourages innovation, nurtures
          critical thinking, and instills ethical values. By blending academic rigor with practical
          learning, we aim to prepare our students to face the challenges of a dynamic world with
          confidence and resilience.</p>
        </div>
      </div>
      <div class="col-lg-4 fade-up fade-up-delay-2">
        <div class="vmh-card">
          <div class="vmh-card-icon"><i class="bi bi-clock-history"></i></div>
          <h4>Our History</h4>
          <p>Our institution has a rich legacy of excellence and dedication to education. Established with
          a vision to transform lives through learning, we have grown over the years into a beacon of
          knowledge and innovation. From humble beginnings, we have evolved into a modern, dynamic
          institution that embraces change while upholding the timeless values of integrity and perseverance.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- MESSAGES -->
<section class="messages-section">
  <div class="container">
    <div class="text-center mb-5 fade-up">
      <span class="section-tag">Leadership</span>
      <h2 class="section-title">Messages from Our <span class="highlight">Leaders</span></h2>
      <div class="gold-divider center"></div>
    </div>
    <div class="row g-4">
      <div class="col-lg-6 fade-up">
        <div class="message-card-3d">
          <div class="quote-icon">"</div>
          <h5 class="message-title">Manager / Secretary's Message</h5>
          <span class="message-role">Modern Public School &amp; College</span>
          <p class="message-text">
            A very hearty welcome to all our new and returning students! Another exciting school year
            has begun at Modern Public School &amp; College, Sultanpur. We take immense pride in
            providing exceptional quality education to our young learners. Our commitment lies in fostering
            a dynamic learning environment that promotes academic excellence alongside strong values,
            preparing students for a bright and promising future. We believe in igniting a passion for
            learning in every student, equipping them with the tools to reach their full potential.
          </p>
          <a href="<?= $base ?>images/Sectretary message.pdf" target="_blank" class="btn-outline-gold"
            style="font-size:.8rem;padding:9px 22px;">
            <i class="bi bi-file-earmark-pdf me-2"></i>Read Full Message
          </a>
        </div>
      </div>
      <div class="col-lg-6 fade-up fade-up-delay-1">
        <div class="message-card-3d">
          <div class="quote-icon">"</div>
          <h5 class="message-title">Principal's Message</h5>
          <span class="message-role">Modern Public School &amp; College</span>
          <p class="message-text">
            It is with immense pleasure and deep gratitude that I address each one of you. At Modern
            Public School &amp; College, we are committed to providing an environment that motivates
            children to become self-reliant and confident individuals. For over 33 years, our institution
            has been dedicated to delivering high-quality, affordable education to all. We continuously
            strive to innovate in the field of education, integrating modern teaching methodologies and
            computer-aided learning techniques to ensure our students receive the best possible education.
          </p>
          <a href="<?= $base ?>images/PRINCIPAL'S  MESSAGE.pdf" target="_blank" class="btn-outline-gold"
            style="font-size:.8rem;padding:9px 22px;">
            <i class="bi bi-file-earmark-pdf me-2"></i>Read Full Message
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- CTA -->
<section class="cta-section text-center">
  <div class="particles-bg"></div>
  <div class="container" style="position:relative;z-index:1">
    <div class="fade-up">
      <span class="section-tag">Enroll Today</span>
      <h2 class="section-title" style="max-width:700px;margin:0 auto 20px;">
        Be Part of Our <span class="highlight">Legacy</span>
      </h2>
      <p class="section-text mb-4" style="max-width:580px;margin:0 auto 30px;">
        Join thousands of students who have shaped their futures at Modern Public School &amp; College.
        Admission open for session 2026–2027.
      </p>
      <div class="d-flex flex-wrap gap-3 justify-content-center">
        <a href="online_registration.php" class="btn-gold">Register Now</a>
        <a href="contact.php" class="btn-outline-gold">Get in Touch</a>
      </div>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
