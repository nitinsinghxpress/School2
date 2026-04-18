<?php
// includes/header.php
$base = "https://www.modernpublicschoolandcollege.com/";
$pages = [
  'Home'                => 'index.php',
  'About'               => 'about.php',
  'Infrastructure'      => [
    'School Campus'   => 'infrastructure.php',
    'Laboratories'    => 'laboratories.php',
  ],
  'Online Registration' => 'online_registration.php',
  'Gallery'             => 'gallery.php',
  'Contact Us'          => 'contact.php',
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?= $pageTitle ?? 'Modern Public School & College' ?> | ICSE & ISC Board</title>
  <meta name="description" content="Modern Public School & College – ICSE & ISC Board, Lucknow Road, Gabhariya-Sultanpur (U.P.)">

  <!-- MDBootstrap 5 -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.3.2/mdb.min.css"/>
  <!-- Bootstrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"/>
  <!-- Custom -->
  <link rel="stylesheet" href="css/style.css"/>
</head>
<body>

<!-- TICKER -->
<div class="ticker-wrap">
  <div class="ticker-content">
    &nbsp;&nbsp;&nbsp;🎓&nbsp; ADMISSION OPEN FOR SESSION 2026-27 ! Nursery To 9th and 11th Std. &nbsp;|&nbsp;
    📞 Call: +91 9451561564 / +91 6387004287 &nbsp;|&nbsp;
    ✉️ modernpublicschool.sln@gmail.com &nbsp;|&nbsp;
    🏫 ICSE & ISC Board | School Code: UP424 &nbsp;|&nbsp;
    🏆 Sports-Centric | Value-Based | Holistic Education
    &nbsp;&nbsp;&nbsp;
  </div>
</div>

<!-- TOP INFO BAR -->
<div class="topbar d-none d-lg-block">
  <div class="container">
    <div class="d-flex justify-content-between align-items-center">
      <div class="d-flex align-items-center gap-3">
        <span><i class="bi bi-telephone-fill me-1 text-gold"></i>
          <a href="tel:+919451561564">+91 9451561564</a>
        </span>
        <span class="text-white-50">|</span>
        <span><i class="bi bi-envelope-fill me-1 text-gold"></i>
          <a href="mailto:modernpublicschool.sln@gmail.com">modernpublicschool.sln@gmail.com</a>
        </span>
        <span class="text-white-50">|</span>
        <span class="text-white-50" style="font-size:.78rem;">
          <i class="bi bi-geo-alt-fill me-1 text-gold"></i>Lucknow Road, Gabhariya-Sultanpur (U.P.) 228001
        </span>
      </div>
      <div class="d-flex align-items-center">
        <a href="https://www.facebook.com/share/18Yybg14vo/" target="_blank" class="social-icon"><i class="bi bi-facebook"></i></a>
        <a href="#" class="social-icon"><i class="bi bi-instagram"></i></a>
        <a href="#" class="social-icon"><i class="bi bi-linkedin"></i></a>
        <a href="https://wa.me/6387004287" target="_blank" class="social-icon"><i class="bi bi-whatsapp"></i></a>
      </div>
    </div>
  </div>
</div>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-main">
  <div class="container">
    <a class="navbar-brand d-flex align-items-center gap-3" href="index.php">
      <img src="<?= $base ?>images/schoollogo.png" alt="Logo" class="navbar-brand-logo">
      <div class="school-name-nav">
        MODERN PUBLIC SCHOOL & COLLEGE
        <small class="d-block">ICSE & ISC Board, New Delhi &nbsp;|&nbsp; School Code: UP424</small>
      </div>
    </a>
    <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav"
      style="color:var(--gold-light)">
      <i class="bi bi-list fs-2"></i>
    </button>
    <div class="collapse navbar-collapse" id="mainNav">
      <ul class="navbar-nav ms-auto align-items-lg-center gap-lg-1">
        <li class="nav-item"><a class="nav-link <?= ($currentPage??'')==='index'?'active':'' ?>" href="index.php">Home</a></li>
        <li class="nav-item"><a class="nav-link <?= ($currentPage??'')==='about'?'active':'' ?>" href="about.php">About</a></li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Infrastructure</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="infrastructure.php"><i class="bi bi-building me-2 text-gold"></i>School Campus</a></li>
            <li><a class="dropdown-item" href="laboratories.php"><i class="bi bi-flask me-2 text-gold"></i>Laboratories</a></li>
          </ul>
        </li>
        <li class="nav-item"><a class="nav-link <?= ($currentPage??'')==='registration'?'active':'' ?>" href="online_registration.php">Online Registration</a></li>
        <li class="nav-item"><a class="nav-link <?= ($currentPage??'')==='gallery'?'active':'' ?>" href="gallery.php">Gallery</a></li>
        <li class="nav-item"><a class="nav-link <?= ($currentPage??'')==='contact'?'active':'' ?>" href="contact.php">Contact Us</a></li>
        <li class="nav-item ms-lg-2">
          <a href="online_registration.php" class="btn-gold">Apply Now</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- WhatsApp Float -->
<a href="https://wa.me/6387004287?text=Hello%2C%20I%20would%20like%20to%20know%20more%20about%20your%20services." 
   target="_blank" class="whatsapp-float" title="Chat on WhatsApp">
  <i class="bi bi-whatsapp"></i>
</a>
