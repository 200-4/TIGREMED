/* ─── Tigremed Pharma — main.js ─── */

/* ── 1. Hamburger / Mobile nav ── */
(function () {
  var btn = document.getElementById('hamburger');
  var nav = document.getElementById('mobile-nav');
  if (!btn || !nav) return;

  btn.addEventListener('click', function () {
    var isOpen = nav.classList.toggle('open');
    btn.classList.toggle('open', isOpen);
    btn.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
    nav.setAttribute('aria-hidden', isOpen ? 'false' : 'true');
  });

  /* Close mobile nav when a link inside it is clicked */
  nav.addEventListener('click', function (e) {
    if (e.target.classList.contains('mobile-link')) {
      nav.classList.remove('open');
      btn.classList.remove('open');
      btn.setAttribute('aria-expanded', 'false');
      nav.setAttribute('aria-hidden', 'true');
    }
  });
})();

/* ── 2. Footer year ── */
(function () {
  var el = document.getElementById('footer-year');
  if (el) el.textContent = new Date().getFullYear();
})();

/* ── 3. Scroll-reveal ── */
(function () {
  var items = document.querySelectorAll('.reveal');
  if (!items.length) return;

  var io = new IntersectionObserver(function (entries) {
    entries.forEach(function (entry) {
      if (entry.isIntersecting) {
        entry.target.classList.add('visible');
        io.unobserve(entry.target);
      }
    });
  }, { threshold: 0.12 });

  items.forEach(function (el) { io.observe(el); });
})();

/* ── 4. Header topbar hide on scroll down ── */
(function () {
  var topbar = document.getElementById('header-top');
  if (!topbar) return;

  var lastScrollY = window.scrollY;
  window.addEventListener('scroll', function () {
    var currentScrollY = window.scrollY;
    if (currentScrollY > lastScrollY && currentScrollY > 20) {
      topbar.classList.add('header-top-hidden');
    } else if (currentScrollY < lastScrollY) {
      topbar.classList.remove('header-top-hidden');
    }
    lastScrollY = currentScrollY;
  }, { passive: true });
})();

/* ── 5. Product carousel controls ── */
(function () {
  var carousel = document.getElementById('product-grid');
  if (!carousel) return;

  var buttons = document.querySelectorAll('.carousel-btn');
  if (!buttons.length) return;

  buttons.forEach(function (button) {
    button.addEventListener('click', function () {
      var direction = this.getAttribute('data-scroll-dir') === 'prev' ? -1 : 1;
      var card = carousel.querySelector('.product-card');
      var scrollAmount = card ? card.getBoundingClientRect().width + 24 : 260;
      carousel.scrollBy({ left: scrollAmount * direction, behavior: 'smooth' });
    });
  });
})();

/* ── 6. Product detail accordion ── */
(function () {
  var triggers = document.querySelectorAll('.accordion-trigger');
  if (!triggers.length) return;

  function closeAll() {
    document.querySelectorAll('.accordion-item').forEach(function (item) {
      item.classList.remove('is-open');
      var trigger = item.querySelector('.accordion-trigger');
      if (trigger) trigger.setAttribute('aria-expanded', 'false');
    });
  }

  triggers.forEach(function (trigger) {
    trigger.addEventListener('click', function () {
      var item = trigger.closest('.accordion-item');
      if (!item) return;
      var isOpen = item.classList.contains('is-open');
      closeAll();
      if (!isOpen) {
        item.classList.add('is-open');
        trigger.setAttribute('aria-expanded', 'true');
      }
    });
  });
})();

/* ── 7. Products page hero typing animation ── */
(function () {
  var heroTextEl = document.getElementById('heroText');
  if (!heroTextEl) return;

  var heroMessages = [
    'Trusted globally',
    'Innovation-led research',
    'Advancing patient care'
  ];

  var msgIndex = 0;
  var charIndex = 0;
  var typing = true;
  var typeSpeed = 55;
  var eraseSpeed = 30;
  var holdTime = 1600;

  function tick() {
    var current = heroMessages[msgIndex];

    if (typing) {
      charIndex++;
      heroTextEl.innerHTML = current.slice(0, charIndex) + '<span class="cursor-blink"></span>';
      if (charIndex >= current.length) {
        typing = false;
        setTimeout(tick, holdTime);
        return;
      }
      setTimeout(tick, typeSpeed);
    } else {
      charIndex--;
      heroTextEl.innerHTML = current.slice(0, charIndex) + '<span class="cursor-blink"></span>';
      if (charIndex <= 0) {
        typing = true;
        msgIndex = (msgIndex + 1) % heroMessages.length;
        setTimeout(tick, 300);
        return;
      }
      setTimeout(tick, eraseSpeed);
    }
  }

  var prefersReducedMotion = window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches;
  if (prefersReducedMotion) {
    heroTextEl.innerHTML = heroMessages[0] + '<span class="cursor-blink"></span>';
  } else {
    tick();
  }
})();
