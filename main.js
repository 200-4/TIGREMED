/* ─── Tigremed Pharma — main.js ─── */

/* ── 1. Hamburger / Mobile nav ── */
(function () {
  var btn = document.getElementById('hamburger');
  var nav = document.getElementById('mobile-nav');
  if (!btn || !nav) return;

  function closeNav() {
    nav.classList.remove('open');
    btn.classList.remove('open');
    btn.setAttribute('aria-expanded', 'false');
    nav.setAttribute('aria-hidden', 'true');
  }

  btn.addEventListener('click', function () {
    var isOpen = nav.classList.toggle('open');
    btn.classList.toggle('open', isOpen);
    btn.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
    nav.setAttribute('aria-hidden', isOpen ? 'false' : 'true');
  });

  nav.addEventListener('click', function (e) {
    var link = e.target.closest('.mobile-link');
    if (!link) return;

    var parentLi = link.parentElement;
    var submenu = parentLi.querySelector(':scope > .mobile-submenu');

    if (submenu) {
      /* Parent link with a submenu: toggle it, don't navigate or close */
      e.preventDefault();
      submenu.classList.toggle('open');
      parentLi.classList.toggle('open');
      return;
    }

    /* Leaf link: let it navigate, close the overlay */
    closeNav();
  });
})();

/* ── 2. Hide header-top on scroll down, show on scroll up ──
   Uses hysteresis (separate show/hide thresholds) + state tracking +
   requestAnimationFrame throttling. The previous version used one shared
   boundary (currentScrollY > 80) with a small threshold, which caused
   rapid add/remove flicker: collapsing header-top via max-height shifts
   page content upward, and tiny natural scroll increments near that
   single boundary kept flipping delta's sign several times a second. */
(function () {
  var headerTop = document.getElementById('header-top');
  if (!headerTop) return;

  var lastScrollY = window.scrollY;
  var isHidden = false;
  var ticking = false;

  var SHOW_BELOW = 60;   // always show while still near the very top
  var HIDE_ABOVE = 140;  // only hide once scrolled comfortably past the top
  var MIN_DELTA = 6;     // ignore sub-pixel jitter from trackpads/inertia

  function update() {
    var currentScrollY = window.scrollY;
    var delta = currentScrollY - lastScrollY;

    if (currentScrollY <= SHOW_BELOW) {
      if (isHidden) {
        headerTop.classList.remove('scrolled-hidden');
        isHidden = false;
      }
    } else if (Math.abs(delta) > MIN_DELTA) {
      if (delta > 0 && currentScrollY > HIDE_ABOVE && !isHidden) {
        headerTop.classList.add('scrolled-hidden');
        isHidden = true;
      } else if (delta < 0 && isHidden) {
        headerTop.classList.remove('scrolled-hidden');
        isHidden = false;
      }
    }

    lastScrollY = currentScrollY;
    ticking = false;
  }

  window.addEventListener('scroll', function () {
    if (!ticking) {
      window.requestAnimationFrame(update);
      ticking = true;
    }
  }, { passive: true });
})();

/* ── 3. Footer year ── */
(function () {
  var el = document.getElementById('footer-year');
  if (el) el.textContent = new Date().getFullYear();
})();

/* ── 4. Scroll-reveal ── */
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