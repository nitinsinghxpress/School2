<?php
$pageTitle = 'Laboratories';
$currentPage = 'laboratories';
$base = "https://www.modernpublicschoolandcollege.com/";
include 'includes/header.php';

$labs = [
  [
    'icon'  => 'bi-lightning-fill',
    'color' => '#4fc3f7',
    'title' => 'Physics Laboratory',
    'desc'  => 'Our Physics lab is equipped with modern instruments for mechanics, optics, electricity, magnetism, and thermodynamics experiments. Students gain hands-on experience that brings textbook concepts to life.',
    'items' => ['Optics Equipment','Electronic Meters','Wave Apparatus','Mechanics Kit','Thermodynamics Tools'],
  ],
  [
    'icon'  => 'bi-droplet-fill',
    'color' => '#a5d6a7',
    'title' => 'Chemistry Laboratory',
    'desc'  => 'Fully equipped with glassware, reagents, fume hoods, and safety equipment. Students conduct organic, inorganic, and analytical chemistry experiments under expert supervision.',
    'items' => ['Fume Hoods','Analytical Balance','Distillation Kit','Titration Setup','Safety Equipment'],
  ],
  [
    'icon'  => 'bi-flower2',
    'color' => '#f48fb1',
    'title' => 'Biology Laboratory',
    'desc'  => 'A well-stocked Biology lab featuring microscopes, specimen slides, models of human anatomy, and dissection equipment, enabling students to explore life sciences deeply.',
    'items' => ['Compound Microscopes','Specimen Slides','Human Anatomy Models','Dissection Tools','Genetic Charts'],
  ],
  [
    'icon'  => 'bi-pc-display-horizontal',
    'color' => '#ce93d8',
    'title' => 'Computer Laboratory',
    'desc'  => 'A modern computer lab with the latest hardware, licensed software, and high-speed internet access. Used for programming, digital literacy, and research across all classes.',
    'items' => ['Latest Desktops','High-Speed Internet','Programming Software','Office Suite','Printer / Scanner'],
  ],
];
?>

<div class="page-banner">
  <div class="container" style="position:relative;z-index:1">
    <h1 class="page-banner-title text-white">Our <span style="color:var(--gold-light);">Laboratories</span></h1>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb mb-0">
        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
        <li class="breadcrumb-item">Infrastructure</li>
        <li class="breadcrumb-item active">Laboratories</li>
      </ol>
    </nav>
    <p class="mt-3" style="color:rgba(255,255,255,.65);">Hands-on learning with state-of-the-art equipment</p>
  </div>
</div>

<section class="vmh-section">
  <div class="container">
    <div class="text-center mb-5 fade-up">
      <span class="section-tag">Experimental Learning</span>
      <h2 class="section-title">Our <span class="highlight">Laboratories</span></h2>
      <div class="gold-divider center"></div>
      <p class="section-text" style="max-width:600px;margin:0 auto;">
        We believe true understanding comes from hands-on experience. Our state-of-the-art laboratories
        are designed to make science come alive for every student.
      </p>
    </div>

    <div class="row g-5">
      <?php foreach ($labs as $i => $lab): ?>
      <div class="col-lg-6 fade-up <?= $i%2===1?'fade-up-delay-1':'' ?>">
        <div class="message-card-3d" style="height:100%">
          <div class="d-flex align-items-center gap-3 mb-3">
            <div style="width:60px;height:60px;border-radius:14px;
              background:rgba(<?= hexToRgb($lab['color']) ?>,.15);
              border:1px solid rgba(<?= hexToRgb($lab['color']) ?>,.3);
              display:flex;align-items:center;justify-content:center;flex-shrink:0;">
              <i class="bi <?= $lab['icon'] ?>" style="font-size:1.6rem;color:<?= $lab['color'] ?>;"></i>
            </div>
            <h4 style="font-family:'Playfair Display',serif;color:var(--gold-light);margin:0;font-size:1.3rem;">
              <?= $lab['title'] ?>
            </h4>
          </div>
          <p style="color:rgba(255,255,255,.7);font-size:.9rem;line-height:1.8;margin-bottom:20px;">
            <?= $lab['desc'] ?>
          </p>
          <div class="d-flex flex-wrap gap-2">
            <?php foreach ($lab['items'] as $item): ?>
            <span style="background:rgba(200,168,75,0.1);border:1px solid rgba(200,168,75,0.2);
              color:rgba(255,255,255,.75);font-size:.76rem;padding:5px 12px;border-radius:20px;">
              <i class="bi bi-check2 me-1" style="color:var(--gold);"></i><?= $item ?>
            </span>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<?php
function hexToRgb($hex) {
  $hex = ltrim($hex, '#');
  [$r,$g,$b] = [hexdec(substr($hex,0,2)), hexdec(substr($hex,2,2)), hexdec(substr($hex,4,2))];
  return "$r,$g,$b";
}
?>

<section class="cta-section text-center">
  <div class="particles-bg"></div>
  <div class="container" style="position:relative;z-index:1">
    <div class="fade-up">
      <span class="section-tag">Hands-On Education</span>
      <h2 class="section-title" style="max-width:700px;margin:0 auto 20px;">
        Experience <span class="highlight">Science</span> Like Never Before
      </h2>
      <p class="section-text mb-4" style="max-width:560px;margin:0 auto 30px;">
        Our laboratories are open to students from Class VI onwards. Practical sessions are conducted
        regularly as part of the ICSE curriculum.
      </p>
      <div class="d-flex flex-wrap gap-3 justify-content-center">
        <a href="online_registration.php" class="btn-gold">Enroll Today</a>
        <a href="contact.php" class="btn-outline-gold">Schedule a Visit</a>
      </div>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
