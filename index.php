<?php
$pageTitle = 'Home';
$currentPage = 'index';
$base = "https://www.modernpublicschoolandcollege.com/";
include 'includes/header.php';
?>

<!-- ═══════════════════ HERO CAROUSEL ═══════════════════ -->
<section class="hero-carousel position-relative">
  <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">
    <div class="carousel-inner">

      <!-- Slide 1 -->
      <div class="carousel-item active">
        <img src="<?= $base ?>school_img/school.jpg" class="hero-img" alt="Modern Public School">
        <div class="hero-overlay"></div>
        <div class="hero-content d-flex align-items-center">
          <div class="particles-bg"></div>
          <div class="container py-5" style="position:relative;z-index:2">
            <div class="row">
              <div class="col-lg-8">
                <span class="hero-badge">ICSE &amp; ISC Board — School Code UP424</span>
                <h1 class="hero-title">
                  <span class="accent">Modern Public</span><br>
                  School &amp; College
                </h1>
                <p class="hero-subtitle">Empowering Students, Shaping Futures — Where education meets excellence.</p>
                <div class="d-flex flex-wrap gap-3">
                  <a href="contact.php" class="btn-gold">Contact Us</a>
                  <a href="about.php" class="btn-outline-gold">Learn More</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Slide 2 -->
      <div class="carousel-item">
        <img src="<?= $base ?>school_img/carausel_0.jpg" class="hero-img" alt="Excellence">
        <div class="hero-overlay"></div>
        <div class="hero-content d-flex align-items-center">
          <div class="particles-bg"></div>
          <div class="container py-5" style="position:relative;z-index:2">
            <div class="row">
              <div class="col-lg-8">
                <span class="hero-badge">Academic Achievement</span>
                <h1 class="hero-title">
                  Celebrating<br><span class="accent">Excellence</span>
                </h1>
                <p class="hero-subtitle">Proud of our students for achieving top ranks in academics and co-curricular activities.</p>
                <div class="d-flex flex-wrap gap-3">
                  <a href="contact.php" class="btn-gold">Contact Us</a>
                  <a href="about.php" class="btn-outline-gold">Read More</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Slide 3 -->
      <div class="carousel-item">
        <img src="<?= $base ?>school_img/school.jpg" class="hero-img" alt="Infrastructure">
        <div class="hero-overlay" style="background:linear-gradient(135deg,rgba(10,22,40,.9),rgba(200,168,75,.2))"></div>
        <div class="hero-content d-flex align-items-center">
          <div class="particles-bg"></div>
          <div class="container py-5" style="position:relative;z-index:2">
            <div class="row">
              <div class="col-lg-8">
                <span class="hero-badge">World-Class Facilities</span>
                <h1 class="hero-title">
                  <span class="accent">World-Class</span><br>Infrastructure
                </h1>
                <p class="hero-subtitle">Experience modern facilities that support holistic learning and development.</p>
                <div class="d-flex flex-wrap gap-3">
                  <a href="contact.php" class="btn-gold">Contact Us</a>
                  <a href="infrastructure.php" class="btn-outline-gold">Explore</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon"></span>
    </button>
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active" style="background:var(--gold);width:30px;border-radius:3px;"></button>
      <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1" style="background:rgba(200,168,75,.4);width:30px;border-radius:3px;"></button>
      <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="2" style="background:rgba(200,168,75,.4);width:30px;border-radius:3px;"></button>
    </div>
  </div>
</section>

<!-- ═══════════════════ STATS STRIP ═══════════════════ -->
<section class="stats-section" style="position:relative;overflow:hidden;">
  <div class="particles-bg"></div>
  <div class="container" style="position:relative;z-index:1">
    <div class="row g-4 justify-content-center">
      <div class="col-6 col-md-3 fade-up">
        <div class="stat-card-3d">
          <div class="stat-icon"><i class="bi bi-award-fill"></i></div>
          <span class="stat-number" data-count="33" data-suffix="+">0+</span>
          <span class="stat-label">Years of Excellence</span>
        </div>
      </div>
      <div class="col-6 col-md-3 fade-up fade-up-delay-1">
        <div class="stat-card-3d">
          <div class="stat-icon"><i class="bi bi-people-fill"></i></div>
          <span class="stat-number" data-count="2500" data-suffix="+">0+</span>
          <span class="stat-label">Students Enrolled</span>
        </div>
      </div>
      <div class="col-6 col-md-3 fade-up fade-up-delay-2">
        <div class="stat-card-3d">
          <div class="stat-icon"><i class="bi bi-person-badge-fill"></i></div>
          <span class="stat-number" data-count="85" data-suffix="+">0+</span>
          <span class="stat-label">Dedicated Faculty</span>
        </div>
      </div>
      <div class="col-6 col-md-3 fade-up fade-up-delay-3">
        <div class="stat-card-3d">
          <div class="stat-icon"><i class="bi bi-trophy-fill"></i></div>
          <span class="stat-number" data-count="100" data-suffix="%">0%</span>
          <span class="stat-label">Board Pass Rate</span>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ═══════════════════ ABOUT ═══════════════════ -->
<section class="about-section">
  <div class="container">
    <div class="row align-items-center g-5">
      <div class="col-lg-5 fade-up">
        <div class="about-img-frame">
          <img src="<?= $base ?>school_img/school.jpg" alt="School Campus">
        </div>
      </div>
      <div class="col-lg-7 fade-up fade-up-delay-1">
        <span class="section-tag">Learning Beyond Classrooms</span>
        <h2 class="section-title">Welcome to <span class="highlight">Modern Public</span> School &amp; College</h2>
        <div class="gold-divider"></div>
        <p class="section-text mb-3">
          A balanced focus on academics, sports, arts, and extracurricular activities ensures every
          child grows into a well-rounded individual.
        </p>
        <p class="section-text mb-4">
          We believe education is not confined to textbooks; it extends to nurturing creativity,
          critical thinking, teamwork, and leadership skills. Through cultural events, sports
          tournaments, art exhibitions, and student-led initiatives, we encourage students to
          explore their interests and uncover hidden talents.
        </p>
        <div class="mb-4">
          <span class="feature-pill"><i class="bi bi-check-circle-fill"></i> Sports-Centric Learning</span>
          <span class="feature-pill"><i class="bi bi-check-circle-fill"></i> Value-Based Education</span>
          <span class="feature-pill"><i class="bi bi-check-circle-fill"></i> Student-Centered Approach</span>
          <span class="feature-pill"><i class="bi bi-check-circle-fill"></i> Holistic Growth</span>
          <span class="feature-pill"><i class="bi bi-check-circle-fill"></i> Modern Facilities</span>
          <span class="feature-pill"><i class="bi bi-check-circle-fill"></i> Safe &amp; Hygienic Environment</span>
          <span class="feature-pill"><i class="bi bi-check-circle-fill"></i> Global Perspective</span>
          <span class="feature-pill"><i class="bi bi-check-circle-fill"></i> Strong Alumni Network</span>
        </div>
        <a href="about.php" class="btn-gold">Know More About Us</a>
      </div>
    </div>
  </div>
</section>

<!-- ═══════════════════ MESSAGES ═══════════════════ -->
<section class="messages-section">
  <div class="container">
    <div class="text-center mb-5 fade-up">
      <span class="section-tag">Leadership</span>
      <h2 class="section-title">A <span class="highlight">Warm Welcome</span> from Our Leaders</h2>
      <div class="gold-divider center"></div>
    </div>
    <div class="row g-4">
      <!-- Manager/Secretary -->
      <div class="col-lg-6 fade-up">
        <div class="message-card-3d">
          <div class="quote-icon">"</div>
          <p class="message-text">
            A very hearty welcome to all our new and returning students! Another exciting school year has begun
            at Modern Public School &amp; College, Sultanpur. We take immense pride in providing exceptional
            quality education to our young learners. Our commitment lies in fostering a dynamic learning
            environment that promotes academic excellence alongside strong values, preparing students for a
            bright and promising future.
          </p>
          <div class="d-flex align-items-center gap-3 mt-3">
            <div style="width:60px;height:60px;border-radius:50%;background:rgba(200,168,75,0.2);
              border:2px solid var(--gold);display:flex;align-items:center;justify-content:center;
              font-size:1.5rem;color:var(--gold);">
              <i class="bi bi-person-fill"></i>
            </div>
            <div>
              <div class="message-title" style="font-size:1.1rem;">Manager / Secretary's Message</div>
              <div class="message-role">Modern Public School &amp; College</div>
            </div>
          </div>
          <a href="<?= $base ?>images/Sectretary message.pdf" target="_blank"
            class="btn-outline-gold d-inline-block mt-4" style="font-size:.8rem;padding:9px 22px;">
            <i class="bi bi-file-earmark-pdf me-2"></i>Read Full Message
          </a>
        </div>
      </div>

      <!-- Principal -->
      <div class="col-lg-6 fade-up fade-up-delay-1">
        <div class="message-card-3d">
          <div class="quote-icon">"</div>
          <p class="message-text">
            It is with immense pleasure and deep gratitude that I address each one of you. At Modern Public
            School &amp; College, we are committed to providing an environment that motivates children to become
            self-reliant and confident individuals. For over 33 years, our institution has been dedicated to
            delivering high-quality, affordable education to all. We continuously strive to innovate in
            the field of education, integrating modern teaching methodologies and computer-aided learning.
          </p>
          <div class="d-flex align-items-center gap-3 mt-3">
            <div style="width:60px;height:60px;border-radius:50%;background:rgba(200,168,75,0.2);
              border:2px solid var(--gold);display:flex;align-items:center;justify-content:center;
              font-size:1.5rem;color:var(--gold);">
              <i class="bi bi-person-fill"></i>
            </div>
            <div>
              <div class="message-title" style="font-size:1.1rem;">Principal's Message</div>
              <div class="message-role">Modern Public School &amp; College</div>
            </div>
          </div>
          <a href="<?= $base ?>images/PRINCIPAL'S  MESSAGE.pdf" target="_blank"
            class="btn-outline-gold d-inline-block mt-4" style="font-size:.8rem;padding:9px 22px;">
            <i class="bi bi-file-earmark-pdf me-2"></i>Read Full Message
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ═══════════════════ TOPPERS ═══════════════════ -->
<section class="toppers-section">
  <div class="container">
    <div class="text-center mb-5 fade-up">
      <span class="section-tag">Star Achievers</span>
      <h2 class="section-title">Our <span class="highlight">Toppers</span></h2>
      <div class="gold-divider center"></div>
      <p class="section-text" style="max-width:500px;margin:0 auto;">Celebrating our brightest minds who have made us proud with their outstanding performances.</p>
    </div>
    <div class="row g-4 justify-content-center">
      <div class="col-6 col-md-4 col-lg-3 fade-up">
        <div class="topper-card">
          <img src="<?= $base ?>admin/uploads/toppers/6776bf9e811ad_Screenshot 2025-01-02 220213.png" alt="Topper">
          <div class="topper-card-body">
            <span class="topper-rank"><i class="bi bi-trophy-fill me-1"></i> Top Achiever</span>
          </div>
        </div>
      </div>
      <div class="col-6 col-md-4 col-lg-3 fade-up fade-up-delay-1">
        <div class="topper-card">
          <img src="<?= $base ?>admin/uploads/toppers/6776bfebbd05b_Screenshot 2025-01-02 220335.png" alt="Topper">
          <div class="topper-card-body">
            <span class="topper-rank"><i class="bi bi-trophy-fill me-1"></i> Top Achiever</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ═══════════════════ CTA ═══════════════════ -->
<section class="cta-section text-center">
  <div class="particles-bg"></div>
  <div class="container" style="position:relative;z-index:1">
    <div class="fade-up">
      <span class="section-tag">Join Our Family</span>
      <h2 class="section-title" style="max-width:700px;margin:0 auto 20px;">
        Admission Open for Session <span class="highlight">2026–2027</span>
      </h2>
      <p class="section-text mb-4" style="max-width:580px;margin:0 auto 30px;">
        Nursery to Class IX &amp; XI · ICSE &amp; ISC Board · Lucknow Road, Gabhariya-Sultanpur (U.P.)
      </p>
      <div class="d-flex flex-wrap gap-3 justify-content-center">
        <a href="online_registration.php" class="btn-gold"><i class="bi bi-pencil-square me-2"></i>Register Online</a>
        <a href="tel:+919451561564" class="btn-outline-gold"><i class="bi bi-telephone-fill me-2"></i>Call Now</a>
        <a href="<?= $base ?>admin/uploads/Final MODERN PUBLIC SCHOOL PROSPECTUS (1).pdf" target="_blank"
          class="btn-outline-gold"><i class="bi bi-file-earmark-pdf me-2"></i>Download Prospectus</a>
      </div>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
