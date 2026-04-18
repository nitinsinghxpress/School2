<?php
$pageTitle = 'Online Registration';
$currentPage = 'registration';
$base = "https://www.modernpublicschoolandcollege.com/";
include 'includes/header.php';
?>

<div class="page-banner">
  <div class="container" style="position:relative;z-index:1">
    <h1 class="page-banner-title text-white">Online <span style="color:var(--gold-light);">Registration</span></h1>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb mb-0">
        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
        <li class="breadcrumb-item active">Online Registration</li>
      </ol>
    </nav>
    <p class="mt-3" style="color:rgba(255,255,255,.65);">Admission Open 2026–2027 · Nursery to Class IX &amp; XI</p>
  </div>
</div>

<section class="registration-section">
  <div class="container">
    <div class="row g-5">
      <!-- Info sidebar -->
      <div class="col-lg-4">
        <div class="fade-up">
          <span class="section-tag">Why Choose Us</span>
          <h3 class="section-title" style="font-size:1.8rem;">Start Your Child's <span class="highlight">Journey</span></h3>
          <div class="gold-divider"></div>
          <div class="d-flex flex-column gap-3 mb-4">
            <?php $points = [
              ['bi-mortarboard-fill','ICSE & ISC Board Affiliated'],
              ['bi-shield-check-fill','Safe & Hygienic Environment'],
              ['bi-trophy-fill','Sports-Centric Education'],
              ['bi-pc-display-horizontal','Modern Computer Labs'],
              ['bi-person-hearts','Personalized Attention'],
              ['bi-globe2','Global Perspective'],
            ]; foreach ($points as $p): ?>
            <div style="display:flex;align-items:center;gap:14px;
              background:rgba(200,168,75,0.07);border:1px solid rgba(200,168,75,0.18);
              border-radius:10px;padding:14px 18px;">
              <i class="bi <?= $p[0] ?>" style="color:var(--gold);font-size:1.3rem;flex-shrink:0;"></i>
              <span style="color:rgba(255,255,255,.8);font-size:.9rem;"><?= $p[1] ?></span>
            </div>
            <?php endforeach; ?>
          </div>
          <div style="background:rgba(200,168,75,0.1);border:1px solid rgba(200,168,75,0.25);
            border-radius:12px;padding:22px;margin-top:10px;">
            <div style="color:var(--gold-light);font-weight:600;margin-bottom:10px;">
              <i class="bi bi-telephone-fill me-2"></i>Need Help?
            </div>
            <p style="color:rgba(255,255,255,.65);font-size:.85rem;margin-bottom:14px;">
              Call us for any admission-related queries.
            </p>
            <a href="tel:+919451561564" style="color:var(--gold-light);font-size:1.05rem;font-weight:700;text-decoration:none;">
              +91 9451561564
            </a><br>
            <a href="tel:+916387004287" style="color:rgba(255,255,255,.6);font-size:.9rem;text-decoration:none;">
              +91 6387004287
            </a>
          </div>
        </div>
      </div>

      <!-- Form -->
      <div class="col-lg-8 fade-up fade-up-delay-1">
        <div class="form-3d">
          <h3 style="font-family:'Playfair Display',serif;color:var(--gold-light);margin-bottom:6px;">
            Student Registration Form
          </h3>
          <p style="color:rgba(255,255,255,.5);font-size:.85rem;margin-bottom:28px;">
            Session 2026–2027 &nbsp;|&nbsp; All fields marked * are required
          </p>

          <form id="registrationForm" novalidate>
            <!-- Student Info -->
            <h6 style="color:var(--gold);text-transform:uppercase;letter-spacing:.12em;font-size:.78rem;
              margin-bottom:16px;padding-bottom:8px;border-bottom:1px solid rgba(200,168,75,0.2);">
              <i class="bi bi-person-fill me-2"></i>Student Information
            </h6>
            <div class="row g-3 mb-4">
              <div class="col-sm-6">
                <label class="form-label-3d">Student's First Name *</label>
                <input type="text" name="first_name" class="form-control form-control-3d" placeholder="First name" required>
              </div>
              <div class="col-sm-6">
                <label class="form-label-3d">Student's Last Name *</label>
                <input type="text" name="last_name" class="form-control form-control-3d" placeholder="Last name" required>
              </div>
              <div class="col-sm-6">
                <label class="form-label-3d">Date of Birth *</label>
                <input type="date" name="dob" class="form-control form-control-3d" required>
              </div>
              <div class="col-sm-6">
                <label class="form-label-3d">Gender *</label>
                <select name="gender" class="form-control form-control-3d" required>
                  <option value="" disabled selected>Select gender</option>
                  <option>Male</option>
                  <option>Female</option>
                  <option>Other</option>
                </select>
              </div>
              <div class="col-sm-6">
                <label class="form-label-3d">Class Applying For *</label>
                <select name="class" class="form-control form-control-3d" required>
                  <option value="" disabled selected>Select class</option>
                  <option>Nursery</option>
                  <option>LKG</option>
                  <option>UKG</option>
                  <?php for ($i=1; $i<=9; $i++): ?>
                  <option>Class <?= $i ?></option>
                  <?php endfor; ?>
                  <option>Class XI (Science)</option>
                  <option>Class XI (Commerce)</option>
                  <option>Class XI (Arts)</option>
                </select>
              </div>
              <div class="col-sm-6">
                <label class="form-label-3d">Previous School (if any)</label>
                <input type="text" name="prev_school" class="form-control form-control-3d" placeholder="Previous school name">
              </div>
            </div>

            <!-- Parent Info -->
            <h6 style="color:var(--gold);text-transform:uppercase;letter-spacing:.12em;font-size:.78rem;
              margin-bottom:16px;padding-bottom:8px;border-bottom:1px solid rgba(200,168,75,0.2);">
              <i class="bi bi-people-fill me-2"></i>Parent / Guardian Information
            </h6>
            <div class="row g-3 mb-4">
              <div class="col-sm-6">
                <label class="form-label-3d">Father's Name *</label>
                <input type="text" name="father_name" class="form-control form-control-3d" placeholder="Father's full name" required>
              </div>
              <div class="col-sm-6">
                <label class="form-label-3d">Mother's Name *</label>
                <input type="text" name="mother_name" class="form-control form-control-3d" placeholder="Mother's full name" required>
              </div>
              <div class="col-sm-6">
                <label class="form-label-3d">Contact Number *</label>
                <input type="tel" name="phone" class="form-control form-control-3d" placeholder="+91 XXXXX XXXXX" required>
              </div>
              <div class="col-sm-6">
                <label class="form-label-3d">Alternate Number</label>
                <input type="tel" name="alt_phone" class="form-control form-control-3d" placeholder="+91 XXXXX XXXXX">
              </div>
              <div class="col-12">
                <label class="form-label-3d">Email Address</label>
                <input type="email" name="email" class="form-control form-control-3d" placeholder="parent@email.com">
              </div>
              <div class="col-12">
                <label class="form-label-3d">Residential Address *</label>
                <textarea name="address" class="form-control form-control-3d" rows="3"
                  placeholder="Full address with PIN code" required></textarea>
              </div>
            </div>

            <!-- Additional -->
            <h6 style="color:var(--gold);text-transform:uppercase;letter-spacing:.12em;font-size:.78rem;
              margin-bottom:16px;padding-bottom:8px;border-bottom:1px solid rgba(200,168,75,0.2);">
              <i class="bi bi-chat-text-fill me-2"></i>Additional Information
            </h6>
            <div class="row g-3 mb-4">
              <div class="col-12">
                <label class="form-label-3d">How did you hear about us?</label>
                <select name="source" class="form-control form-control-3d">
                  <option value="" disabled selected>Select an option</option>
                  <option>Friend / Family Referral</option>
                  <option>Google Search</option>
                  <option>Social Media</option>
                  <option>Newspaper / Advertisement</option>
                  <option>School Visit</option>
                  <option>Other</option>
                </select>
              </div>
              <div class="col-12">
                <label class="form-label-3d">Any Special Requirements / Comments</label>
                <textarea name="comments" class="form-control form-control-3d" rows="3"
                  placeholder="Any special requirements or additional information…"></textarea>
              </div>
              <div class="col-12">
                <div style="display:flex;align-items:flex-start;gap:10px;">
                  <input type="checkbox" id="terms" name="terms" required
                    style="margin-top:3px;accent-color:var(--gold);width:16px;height:16px;">
                  <label for="terms" style="color:rgba(255,255,255,.65);font-size:.85rem;cursor:pointer;">
                    I confirm that the above information is accurate and agree to the school's
                    <a href="#" style="color:var(--gold-light);">terms and conditions</a>. *
                  </label>
                </div>
              </div>
            </div>

            <button type="submit" class="btn-gold w-100" style="padding:16px;font-size:1rem;">
              <i class="bi bi-send-check-fill me-2"></i>Submit Application
            </button>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
