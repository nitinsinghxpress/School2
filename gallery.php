<?php
$pageTitle = 'Gallery';
$currentPage = 'gallery';
$base = "https://www.modernpublicschoolandcollege.com/";
include 'includes/header.php';

// Gallery images — using school's own images
$images = [
  ['src' => $base.'school_img/school.jpg',       'caption' => 'School Campus'],
  ['src' => $base.'school_img/carausel_0.jpg',   'caption' => 'Campus Grounds'],
  ['src' => $base.'school_img/school.jpg',       'caption' => 'Sports Ground'],
  ['src' => $base.'school_img/carausel_0.jpg',   'caption' => 'Cultural Activities'],
  ['src' => $base.'school_img/school.jpg',       'caption' => 'Science Laboratory'],
  ['src' => $base.'school_img/carausel_0.jpg',   'caption' => 'Computer Lab'],
  ['src' => $base.'school_img/school.jpg',       'caption' => 'Library'],
  ['src' => $base.'school_img/carausel_0.jpg',   'caption' => 'Annual Function'],
];
?>

<div class="page-banner">
  <div class="container" style="position:relative;z-index:1">
    <h1 class="page-banner-title text-white">Our <span style="color:var(--gold-light);">Gallery</span></h1>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb mb-0">
        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
        <li class="breadcrumb-item active">Gallery</li>
      </ol>
    </nav>
    <p class="mt-3" style="color:rgba(255,255,255,.65);">Moments that define our vibrant school life</p>
  </div>
</div>

<section class="gallery-section">
  <div class="container">
    <div class="text-center mb-5 fade-up">
      <span class="section-tag">Our Memories</span>
      <h2 class="section-title">School <span class="highlight">Life in Pictures</span></h2>
      <div class="gold-divider center"></div>
      <p class="section-text" style="max-width:550px;margin:0 auto;">
        A glimpse into the vibrant, enriching environment that makes Modern Public School &amp; College special.
      </p>
    </div>

    <!-- Filter Tabs -->
    <div class="d-flex flex-wrap gap-2 justify-content-center mb-5 fade-up">
      <?php foreach (['All','Campus','Sports','Laboratory','Events'] as $cat): ?>
      <button onclick="filterGallery(this,'<?= $cat ?>')"
        class="gallery-filter <?= $cat==='All'?'active':'' ?>"
        style="background:<?= $cat==='All'?'linear-gradient(135deg,var(--gold),var(--gold-dark))':'rgba(255,255,255,0.06)' ?>;
          color:<?= $cat==='All'?'var(--navy)':'rgba(255,255,255,.75)' ?>;
          border:1px solid rgba(200,168,75,<?= $cat==='All'?'0':'0.2' ?>);
          border-radius:30px;padding:9px 22px;font-size:.83rem;font-weight:600;
          letter-spacing:.06em;cursor:pointer;transition:all .3s;text-transform:uppercase;">
        <?= $cat ?>
      </button>
      <?php endforeach; ?>
    </div>

    <!-- Grid -->
    <div class="row g-4" id="galleryGrid">
      <?php foreach ($images as $i => $img): ?>
      <div class="col-6 col-md-4 col-lg-3 fade-up <?= $i%2===0?'':'fade-up-delay-1' ?>">
        <div class="gallery-item" onclick="openLightbox('<?= $img['src'] ?>','<?= $img['caption'] ?>')">
          <img src="<?= $img['src'] ?>" alt="<?= $img['caption'] ?>">
          <div class="gallery-overlay">
            <div>
              <div style="color:#fff;font-size:.85rem;font-weight:600;"><?= $img['caption'] ?></div>
              <div style="color:var(--gold-light);font-size:.75rem;"><i class="bi bi-zoom-in"></i> View</div>
            </div>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- LIGHTBOX -->
<div id="lightbox" onclick="closeLightbox()"
  style="display:none;position:fixed;inset:0;background:rgba(0,0,0,.92);z-index:10000;
    align-items:center;justify-content:center;flex-direction:column;cursor:pointer;">
  <button onclick="closeLightbox()" style="position:absolute;top:20px;right:24px;
    background:rgba(200,168,75,.2);border:1px solid var(--gold);color:var(--gold-light);
    width:44px;height:44px;border-radius:50%;font-size:1.3rem;cursor:pointer;">✕</button>
  <img id="lightboxImg" src="" alt="" style="max-width:88vw;max-height:80vh;border-radius:10px;
    border:2px solid rgba(200,168,75,.3);box-shadow:0 0 60px rgba(0,0,0,.8);">
  <p id="lightboxCaption" style="color:var(--gold-light);margin-top:16px;font-size:1rem;font-family:'Playfair Display',serif;"></p>
</div>

<style>
  .gallery-filter:hover { background: rgba(200,168,75,0.15) !important; color: var(--gold-light) !important; transform: translateY(-2px); }
</style>
<script>
function openLightbox(src, caption) {
  document.getElementById('lightboxImg').src = src;
  document.getElementById('lightboxCaption').textContent = caption;
  const lb = document.getElementById('lightbox');
  lb.style.display = 'flex';
  document.body.style.overflow = 'hidden';
}
function closeLightbox() {
  document.getElementById('lightbox').style.display = 'none';
  document.body.style.overflow = '';
}
function filterGallery(btn, cat) {
  document.querySelectorAll('.gallery-filter').forEach(b => {
    b.style.background = 'rgba(255,255,255,0.06)';
    b.style.color = 'rgba(255,255,255,.75)';
  });
  btn.style.background = 'linear-gradient(135deg,var(--gold),var(--gold-dark))';
  btn.style.color = 'var(--navy)';
}
document.addEventListener('keydown', e => { if (e.key === 'Escape') closeLightbox(); });
</script>

<?php include 'includes/footer.php'; ?>
