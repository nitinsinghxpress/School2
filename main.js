// ── MODERN PUBLIC SCHOOL — Main JS ──────────────────────

document.addEventListener('DOMContentLoaded', function () {

  // ── Navbar scroll effect
  const navbar = document.querySelector('.navbar-main');
  window.addEventListener('scroll', () => {
    navbar && (window.scrollY > 50
      ? navbar.classList.add('scrolled')
      : navbar.classList.remove('scrolled'));
  });

  // ── Scroll reveal (IntersectionObserver)
  const fadeEls = document.querySelectorAll('.fade-up');
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(e => {
      if (e.isIntersecting) { e.target.classList.add('visible'); observer.unobserve(e.target); }
    });
  }, { threshold: 0.12 });
  fadeEls.forEach(el => observer.observe(el));

  // ── Counter animation
  function animateCounter(el) {
    const target = parseInt(el.dataset.count);
    if (!target) return;
    let current = 0;
    const step = Math.ceil(target / 60);
    const interval = setInterval(() => {
      current = Math.min(current + step, target);
      el.textContent = current + (el.dataset.suffix || '');
      if (current >= target) clearInterval(interval);
    }, 25);
  }
  const counterObs = new IntersectionObserver((entries) => {
    entries.forEach(e => {
      if (e.isIntersecting) { animateCounter(e.target); counterObs.unobserve(e.target); }
    });
  }, { threshold: 0.5 });
  document.querySelectorAll('.stat-number[data-count]').forEach(el => counterObs.observe(el));

  // ── 3D tilt on cards (mouse move)
  document.querySelectorAll('.stat-card-3d, .message-card-3d, .vmh-card, .infra-card').forEach(card => {
    card.addEventListener('mousemove', e => {
      const rect = card.getBoundingClientRect();
      const x = ((e.clientX - rect.left) / rect.width - 0.5) * 14;
      const y = ((e.clientY - rect.top) / rect.height - 0.5) * -14;
      card.style.transform = `perspective(800px) rotateX(${y}deg) rotateY(${x}deg) translateY(-8px)`;
    });
    card.addEventListener('mouseleave', () => {
      card.style.transform = '';
    });
  });

  // ── Generate floating particles
  const particleBgs = document.querySelectorAll('.particles-bg');
  particleBgs.forEach(bg => {
    for (let i = 0; i < 20; i++) {
      const p = document.createElement('div');
      p.className = 'particle';
      p.style.cssText = `
        left: ${Math.random() * 100}%;
        width: ${2 + Math.random() * 4}px;
        height: ${2 + Math.random() * 4}px;
        animation-duration: ${6 + Math.random() * 10}s;
        animation-delay: ${Math.random() * 8}s;
        opacity: ${0.3 + Math.random() * 0.5};
      `;
      bg.appendChild(p);
    }
  });

  // ── Contact form submission (PHP)
  const contactForm = document.getElementById('contactForm');
  if (contactForm) {
    contactForm.addEventListener('submit', async function (e) {
      e.preventDefault();
      const btn = this.querySelector('[type=submit]');
      const origText = btn.textContent;
      btn.disabled = true;
      btn.textContent = 'Sending…';

      const data = new FormData(this);
      try {
        const res = await fetch('contact_submit.php', { method: 'POST', body: data });
        const json = await res.json();
        showAlert(json.success ? 'success' : 'danger', json.message || (json.success ? 'Message sent!' : 'Error.'));
        if (json.success) this.reset();
      } catch {
        showAlert('danger', 'Network error. Please try again.');
      } finally {
        btn.disabled = false;
        btn.textContent = origText;
      }
    });
  }

  // ── Registration form
  const regForm = document.getElementById('registrationForm');
  if (regForm) {
    regForm.addEventListener('submit', async function (e) {
      e.preventDefault();
      const btn = this.querySelector('[type=submit]');
      btn.disabled = true;
      btn.textContent = 'Submitting…';

      const data = new FormData(this);
      try {
        const res = await fetch('registration_submit.php', { method: 'POST', body: data });
        const json = await res.json();
        showAlert(json.success ? 'success' : 'danger', json.message || (json.success ? 'Registration submitted!' : 'Error.'));
        if (json.success) { this.reset(); window.scrollTo({ top: 0, behavior: 'smooth' }); }
      } catch {
        showAlert('danger', 'Network error. Please try again.');
      } finally {
        btn.disabled = false;
        btn.textContent = 'Submit Application';
      }
    });
  }

  function showAlert(type, msg) {
    const a = document.createElement('div');
    a.className = `alert alert-${type} alert-dismissible fade show position-fixed top-0 start-50 translate-middle-x mt-3`;
    a.style.cssText = 'z-index:9999;min-width:320px;border-radius:10px;';
    a.innerHTML = `${msg}<button type="button" class="btn-close" data-bs-dismiss="alert"></button>`;
    document.body.appendChild(a);
    setTimeout(() => a.remove(), 5000);
  }
});
