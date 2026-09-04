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
  var ticking = false;

  // Instead of reacting to a single frame's scroll direction (which flips
  // constantly during natural/inertial scrolling — trackpad deceleration,
  // rubber-band overshoot, etc.), require a SUSTAINED scroll distance in one
  // consistent direction before toggling. Any reversal resets the counter
  // rather than firing a toggle. This is the same tolerance technique
  // libraries like headroom.js use, and it's what actually stops the shake —
  // the previous per-frame delta check was too sensitive to real-world,
  // non-linear scroll input.
  var SHOW_BELOW = 60;        // always show while still near the very top
  var HIDE_ABOVE = 140;       // only hide once scrolled comfortably past the top
  var TOGGLE_DISTANCE = 40;   // must accumulate this much scroll in one direction

  var accumulator = 0;
  var lastDirection = 0;      // 1 = down, -1 = up, 0 = none yet

  function update() {
    var currentScrollY = Math.max(0, window.scrollY);
    var delta = currentScrollY - lastScrollY;
    var isHidden = headerTop.classList.contains('scrolled-hidden');

    if (currentScrollY <= SHOW_BELOW) {
      if (isHidden) headerTop.classList.remove('scrolled-hidden');
      accumulator = 0;
      lastDirection = 0;
    } else if (delta !== 0) {
      var direction = delta > 0 ? 1 : -1;

      if (direction === lastDirection) {
        accumulator += Math.abs(delta);
      } else {
        // direction reversed — restart the count instead of carrying it over
        accumulator = Math.abs(delta);
        lastDirection = direction;
      }

      if (accumulator >= TOGGLE_DISTANCE) {
        if (direction > 0 && currentScrollY > HIDE_ABOVE && !isHidden) {
          headerTop.classList.add('scrolled-hidden');
        } else if (direction < 0 && isHidden) {
          headerTop.classList.remove('scrolled-hidden');
        }
        accumulator = 0; // must build back up before the next toggle
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

/* ── 5. Hero image carousel ── */
(function () {
  var slides = document.querySelectorAll('.hero-slide');
  if (!slides.length) return;

  var prevBtn = document.querySelector('.hero-carousel-btn.prev');
  var nextBtn = document.querySelector('.hero-carousel-btn.next');
  if (!prevBtn || !nextBtn) return;

  var current = 0;
  var intervalId = null;

  function showSlide(index) {
    slides.forEach(function (slide, slideIndex) {
      slide.classList.toggle('is-active', slideIndex === index);
    });
    current = index;
  }

  function goNext() {
    showSlide((current + 1) % slides.length);
  }

  function startAuto() {
    intervalId = window.setInterval(goNext, 4000);
  }

  prevBtn.addEventListener('click', function () {
    showSlide((current - 1 + slides.length) % slides.length);
    if (intervalId) {
      window.clearInterval(intervalId);
      startAuto();
    }
  });

  nextBtn.addEventListener('click', function () {
    goNext();
    if (intervalId) {
      window.clearInterval(intervalId);
      startAuto();
    }
  });

  startAuto();
})();

/* ── 6. About image slider ── */
(function () {
  var slider = document.querySelector('.about-image-slider');
  if (!slider) return;

  var slides = slider.querySelectorAll('.about-slide');
  if (!slides.length) return;

  var prevBtn = slider.querySelector('.about-slider-btn.prev');
  var nextBtn = slider.querySelector('.about-slider-btn.next');
  var index = 0;
  var autoTimer = null;

  function showAboutSlide(nextIndex) {
    slides.forEach(function (slide, slideIndex) {
      slide.classList.toggle('is-active', slideIndex === nextIndex);
    });
    index = nextIndex;
  }

  function startAutoSlide() {
    autoTimer = window.setInterval(function () {
      showAboutSlide((index + 1) % slides.length);
    }, 3500);
  }

  if (prevBtn) {
    prevBtn.addEventListener('click', function () {
      showAboutSlide((index - 1 + slides.length) % slides.length);
      if (autoTimer) {
        window.clearInterval(autoTimer);
        startAutoSlide();
      }
    });
  }

  if (nextBtn) {
    nextBtn.addEventListener('click', function () {
      showAboutSlide((index + 1) % slides.length);
      if (autoTimer) {
        window.clearInterval(autoTimer);
        startAutoSlide();
      }
    });
  }

  startAutoSlide();
})();

/* ── 7. Product carousel controls ── */
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

/* ── 7. Product detail accordion ── */
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

//PARTNERS Page Hero TEXT TYPING ANIMATION

(function () {
  var heroTextEl = document.getElementById('partnerText');
  if (!heroTextEl) return;

  var heroMessages = [
    'Our Pipeline is a Strategic Edge',
    'We value our Partners',
    'Become Our Partner Today'
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


// ===== INDEX Page Hero Animation
(function () {
  var heroTextEl = document.getElementById('heroTitle');
  if (!heroTextEl) return;

  var heroMessage = '16+ Years of Healthcare Experience';
  var prefersReducedMotion = window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches;

  heroTextEl.textContent = heroMessage;
  if (!prefersReducedMotion) heroTextEl.classList.add('hero-title-grow');
})();